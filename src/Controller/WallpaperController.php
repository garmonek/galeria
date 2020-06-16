<?php
/**
 * Wallpaper controller.
 */

namespace App\Controller;

use App\Entity\Wallpaper;
use App\Form\WallpaperType;
use App\Repository\WallpaperRepository;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class WallpaperController.
 *
 * @Route("/wallpaper")
 */
class WallpaperController extends AbstractController
{
    /**
     * Wallpaper repository.
     *
     * @var \App\Repository\WallpaperRepository
     */
    private $wallpaperRepository;

    /**
     * File uploader.
     *
     * @var \App\Service\FileUploader
     */
    private $fileUploader;

    /**
     * Filesystem component.
     *
     * @var \Symfony\Component\Filesystem\Filesystem
     */
    private $filesystem;

    /**
     * WallpaperController constructor.
     *
     * @param \App\Repository\WallpaperRepository $wallpaperRepository Wallpaper repository
     * @param \Symfony\Component\Filesystem\Filesystem $filesystem       Filesystem component
     * @param \App\Service\FileUploader $fileUploader File uploader
     */
    public function __construct(WallpaperRepository $wallpaperRepository, Filesystem $filesystem, FileUploader $fileUploader)
    {
        $this->wallpaperRepository = $wallpaperRepository;
        $this->filesystem = $filesystem;
        $this->fileUploader = $fileUploader;
    }

    /**
     * Create action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP request
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @Route(
     *     "/create",
     *     name="wallpaper_create",
     *     methods={"GET", "POST"}
     * )
     */
    public function create(Request $request): Response
    {
        $wallpaper = new Wallpaper();
        $form = $this->createForm(WallpaperType::class, $wallpaper);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $wallpaperFilename = $this->fileUploader->upload(
                $form->get('file')->getData()
            );
            $wallpaper->setFilename($wallpaperFilename);
            $wallpaper->setSlug(pathinfo($wallpaperFilename, PATHINFO_FILENAME));
            $this->wallpaperRepository->save($wallpaper);
            $this->getDoctrine()->getManager()->persist($form->getData());
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'message_created_successfully');

            return $this->redirectToRoute('gallery');
        }

        return $this->render(
            'wallpaper/create.html.twig',
            ['form' => $form->createView()]

        );
    }
}
