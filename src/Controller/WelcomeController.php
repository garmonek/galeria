<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/{name}", name="welcome", defaults={"name" = "Tanjiro"}, requirements={"name" = "[A-Za-z]+"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($name)
    {
        return $this->render('welcome/index.html.twig',
            [
                'name' => $name,
            ]
        );
    }
}
