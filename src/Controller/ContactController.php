<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        $this->addFlash('info', 'Please fill this form');

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();

            dump($contactFormData);

            $message = (new \Swift_Message('You got Mail!'))
                ->setFrom($contactFormData['email'])
                ->setTo('garmonek@gmail.com')
                ->setBody(
                    $this->renderView(
                        // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                        ['name' => $request]
                ),
                    'text/html'
                );

            $mailer->send($message);

            $this->addFlash('success', 'Message was sent!');

            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/contact.html.twig', [
            'our_form' => $form->createView()
        ]);
    }
}
