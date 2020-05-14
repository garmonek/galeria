<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/{name}", name="welcome", defaults={"name" = "Guest"}, requirements={"name" = "[A-Za-z]+"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index($name)
    {
        return $this->render('welcome/index.html.twig', [
                'name' => $name,
                'images' => [
                    'spring-blue_gray_gnatcatcher_bird_spring-wallpaper-1920x1080.jpg',
                    'spring-bluebells_flowers_woods_spring-wallpaper-1920x1080.jpg',
                    'spring-colorful_spring_gardens_holland_netherlands-wallpaper-1920x1080.jpg',
                    'spring-sakura_spring_3-wallpaper-1920x1080.jpg',
                    'winter-nature_7-wallpaper-1920x1080.jpg',
                    'winter-snowy_road_winter_landscape-wallpaper-1920x1080.jpg',
                    'winter-snowy_trees_winter_scenery-wallpaper-1920x1080.jpg',
                    'winter-yosemite_winter_photography-wallpaper-1920x1080.jpg',
                    'winter-yosemite_winter_photography-wallpaper-1920x1080.jpg',
                ]
            ]);
    }
}
