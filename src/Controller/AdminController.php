<?php
/**
 * Admin controller.
 */

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

/**
 * Class AdminController
 * @package App\Controller
 */
class AdminController extends AbstractController
{
    /**
     * Edit action.
     *
     * @param Request $request HTTP request
     * @param Security $security Security
     * @param User $user User entity
     * @param UserRepository $userRepository User repository
     * @param UserPasswordEncoderInterface $encoder
     *
     * @return Response HTTP response
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @Route(
     *     "/admin/edit/{id}",
     *     methods={"GET", "PUT"},
     *     name="admin_edit",
     * )
     */
    public function edit(Request $request, Security $security, User $user, UserRepository $userRepository, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $this->denyAccessUnlessGranted(User::ROLE_ADMIN);

        $form = $this->createForm(AdminType::class, $user, ['method' => 'PUT']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->getPassword();
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $userRepository->save($user);

            $this->addFlash('success', 'message_updated_successfully');

            return $this->redirectToRoute('wallpaper_index');
        }


        /*
        if ($form->isSubmitted() && $form->isValid()) {
            $loggedUser = $security->getUser();
            if ($encoder->isPasswordValid($loggedUser, $user->getPassword())) {
                $user = $userRepository->findAll()[0];
                $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
                $user->setEmail($user->getEmail());
                $this->getDoctrine()->getManager()->persist($form->getData());
                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', 'message_updated_successfully');

                return $this->redirectToRoute('wallpaper_index');
            }
        }
    */
        return $this->render(
            'admin/index.html.twig',
            [
                'form' => $form->createView(),
                'user' => $user,
            ]
        );
    }
}
