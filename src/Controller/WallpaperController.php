<?php
/**
 * Wallpaper controller.
 */

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\User;
use App\Entity\Wallpaper;
use App\Form\CommentType;
use App\Form\WallpaperType;
use App\Repository\CommentRepository;
use App\Repository\WallpaperRepository;
use App\Service\FileUploader;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
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
     * @var WallpaperRepository
     */
    private WallpaperRepository $wallpaperRepository;

    /**
     * File uploader.
     *
     * @var FileUploader
     */
    private FileUploader $fileUploader;

    /**
     * Filesystem component.
     *
     * @var Filesystem
     */
    private Filesystem $filesystem;

    /**
     * Index action.
     *
     * @param Request               $request                HTTP Request
     * @param WallpaperRepository   $wallpaperRepository    Wallpaper repository
     * @param PaginatorInterface    $paginator              Paginator
     *
     * @return Response HTTP response
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
     * @param Wallpaper             $wallpaper              Wallpaper entity
     * @param CommentRepository     $commentRepository      Comment Repository
     *
     * @return Response HTTP response
     *
     * @Route(
     *     "/{id}",
     *     methods={"GET"},
     *     name="wallpaper_show",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function show(Wallpaper $wallpaper, CommentRepository $commentRepository): Response
    {
        return $this->render(
            'wallpaper/show.html.twig',
            [
                'wallpaper' => $wallpaper,
                'comments' => $commentRepository->findBy(['id' => $wallpaper->getId()])
            ]
        );
    }

    /**
     * WallpaperController constructor.
     *
     * @param WallpaperRepository       $wallpaperRepository    Wallpaper repository
     * @param Filesystem                $filesystem             Filesystem component
     * @param FileUploader              $fileUploader           File uploader
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
     * @param Request   $request    HTTP request
     *
     * @return Response HTTP response
     *
     * @throws ORMException
     * @throws OptimisticLockException
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
     * @param Request               $request                HTTP request
     * @param Wallpaper             $wallpaper              Wallpaper entity
     * @param WallpaperRepository   $wallpaperRepository    Wallpaper repository
     *
     * @return Response HTTP response
     *
     * @throws ORMException
     * @throws OptimisticLockException
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
        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        $form = $this->createForm(WallpaperType::class, $wallpaper, ['method' => 'PUT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
     * @param Request               $request                HTTP request
     * @param Wallpaper             $wallpaper              Wallpaper entity
     * @param WallpaperRepository   $wallpaperRepository    Wallpaper repository
     *
     * @return Response HTTP response
     *
     * @throws ORMException
     * @throws OptimisticLockException
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
            $this->filesystem->remove(
                $this->getParameter('wallpapers_directory').'/'.$wallpaper->getFilename()
            );

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

    /**
     * Comment action.
     *
     * @param Request       $request        HTTP request
     * @param Wallpaper     $wallpaper      Wallpaper Entity
     *
     * @return Response HTTP response
     *
     * @Route(
     *     "/{id}/comment",
     *     name="wallpaper_comment",
     *     methods={"GET", "POST"}
     * )
     */
    public function comment(Request $request, Wallpaper $wallpaper): Response
    {
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setWallpaper($wallpaper);
            $this->getDoctrine()->getManager()->persist($comment);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'message_created_successfully');

            return $this->redirectToRoute('wallpaper_show', ['id' => $wallpaper->getId()]);
        }

        return $this->render(
            'wallpaper/comment.html.twig',
            [
                'form' => $form->createView(),
                'comment' => $comment,
                'wallpaper' => $wallpaper,
            ]
        );
    }

    /**
     * Delete comment action.
     *
     * @param Request $request HTTP request
     * @param Comment $comment Comment entity
     * @param CommentRepository $commentRepository Comment repository
     *
     * @return Response HTTP response
     *
     * @throws ORMException
     * @throws OptimisticLockException
     *
     * @Route(
     *     "/{id}/comment/delete",
     *     methods={"DELETE","GET"},
     *     requirements={"id": "[1-9]\d*"},
     *     name="wallpaper_comment_delete",
     * )
     */
    public function comment_delete(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        $form = $this->createForm(FormType::class, $comment, ['method' => 'DELETE']);
        $form->handleRequest($request);

        if ($request->isMethod('DELETE') && !$form->isSubmitted()) {
            $form->submit($request->request->get($form->getName()));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $commentRepository->delete($comment);

            $this->addFlash('success', 'deleted_successfully');

            return $this->redirectToRoute('wallpaper_show', ['id' => $comment->getWallpaperId()]);
        }

        return $this->render('wallpaper/comment_delete.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }
}
