<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/view", name="view")
     */
    public function index()
    {
        $image = 'spring-blue_gray_gnatcatcher_bird_spring-wallpaper-1920x1080.jpg';

        return $this->render('detail/index.html.twig', [
            'controller_name' => 'DetailController',
            'image' => $image,
        ]);
    }
}
