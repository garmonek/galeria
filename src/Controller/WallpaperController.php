<?php
/**
 * Wallpaper controller.
 */

namespace App\Controller;

use App\Entity\User;
use App\Entity\Wallpaper;
use App\Form\WallpaperType;
use App\Repository\WallpaperRepository;
use App\Service\FileUploader;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\FormType;
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
     * Index action.
     *
     * @param \App\Repository\WallpaperRepository $wallpaperRepository Wallpaper repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     methods={"GET"},
     *     name="wallpaper_index",
     * )
     */
    public function index(Request $request, WallpaperRepository $wallpaperRepository, PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $wallpaperRepository->queryAll(),
            $request->query->getInt('page', 1),
            WallpaperRepository::PAGINATOR_ITEMS_PER_PAGE
        );

        return $this->render(
            'wallpaper/index.html.twig',
            ['pagination' => $pagination]
        );
    }

    /**
     * Show action.
     *
     * @param \App\Entity\Wallpaper $wallpaper Wallpaper entity
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{id}",
     *     methods={"GET"},
     *     name="wallpaper_show",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function show(Wallpaper $wallpaper): Response
    {
        return $this->render(
            'wallpaper/show.html.twig',
            ['wallpaper' => $wallpaper]
        );
    }

    /**
     * WallpaperController constructor.
     *
     * @param \App\Repository\WallpaperRepository $wallpaperRepository Wallpaper repository
     * @param \Symfony\Component\Filesystem\Filesystem $filesystem Filesystem component
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

        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        if ($form->isSubmitted() && $form->isValid()) {
            $wallpaperFilename = $this->fileUploader->upload(
                $form->get('file')->getData()
            );
            $wallpaper->setFilename($wallpaperFilename);
            $wallpaper->setCreatedAt(new \DateTime());
            $wallpaper->setUpdatedAt(new \DateTime());
            $this->wallpaperRepository->save($wallpaper);
            $this->getDoctrine()->getManager()->persist($form->getData());
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'message_created_successfully');

            return $this->redirectToRoute('wallpaper_index');
        }

        return $this->render(
            'wallpaper/create.html.twig',
            ['form' => $form->createView()]

        );
    }

    /**
     * Edit action.
     *
     * @param \Symfony\Component\HttpFoundation\Request  $request            HTTP request
     * @param \App\Entity\Wallpaper                      $wallpaper           Wallpaper entity
     * @param \App\Repository\WallpaperRepository        $wallpaperRepository Wallpaper repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @Route(
     *     "/{id}/edit",
     *     methods={"GET", "PUT"},
     *     requirements={"id": "[1-9]\d*"},
     *     name="wallpaper_edit",
     * )
     */
    public function edit(Request $request, Wallpaper $wallpaper, WallpaperRepository $wallpaperRepository): Response
    {
        $form = $this->createForm(WallpaperType::class, $wallpaper, ['method' => 'PUT']);
        $form->handleRequest($request);

        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        if ($form->isSubmitted() && $form->isValid()) {
            $wallpaper->setUpdatedAt(new \DateTime());
            $wallpaperRepository->save($wallpaper);

            $this->addFlash('success', 'message_updated_successfully');

            return $this->redirectToRoute('wallpaper_index');
        }

        return $this->render(
            'wallpaper/edit.html.twig',
            [
                'form' => $form->createView(),
                'wallpaper' => $wallpaper,
            ]
        );
    }

    /**
     * Delete action.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request            HTTP request
     * @param \App\Entity\Wallpaper                      $wallpaper           Wallpaper entity
     * @param \App\Repository\WallpaperRepository        $wallpaperRepository Wallpaper repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     *
     * @Route(
     *     "/{id}/delete",
     *     methods={"GET", "DELETE"},
     *     requirements={"id": "[1-9]\d*"},
     *     name="wallpaper_delete",
     * )
     */
    public function delete(Request $request, Wallpaper $wallpaper, WallpaperRepository $wallpaperRepository): Response
    {
        $form = $this->createForm(FormType::class, $wallpaper, ['method' => 'DELETE']);
        $form->handleRequest($request);

        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        if ($request->isMethod('DELETE') && !$form->isSubmitted()) {
            $form->submit($request->request->get($form->getName()));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $wallpaperRepository->delete($wallpaper);
            $this->addFlash('success', 'message.deleted_successfully');

            return $this->redirectToRoute('wallpaper_index');
        }

        return $this->render(
            'wallpaper/delete.html.twig',
            [
                'form' => $form->createView(),
                'wallpaper' => $wallpaper,
            ]
        );
    }
}
