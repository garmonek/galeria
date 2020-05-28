<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $spring = [
            "spring-blue_gray_gnatcatcher_bird_spring-wallpaper-1920x1080.jpg",
            "spring-bluebells_flowers_woods_spring-wallpaper-1920x1080.jpg",
            "spring-colorful_spring_gardens_holland_netherlands-wallpaper-1920x1080.jpg",
            "spring-sakura_spring_3-wallpaper-1920x1080.jpg",
        ];

        $summer = [
            "summer-tropical_beach_resorts-wallpaper-1920x1080.jpg",
            "summer-countryside_chapel-wallpaper-5120x2880.jpg",
            "summer-nature-1523468860044-1522.jpg",
            "summer-photo-1455463640095-c56c5f258548.jpg",
            "summer-private_resort-wallpaper-2560x1440.jpg",
        ];

        $autumn = [
            "autumn-vintage_woods-wallpaper-3840x2160.jpg",
            "autumn-leaves_big_tree_old_house-wallpaper-1920x1080.jpg",
            "autumn-yellow_autumn_aspen_forest_canopy-wallpaper-1920x1080.jpg",
            "autumn-yellow_trees-wallpaper-1920x1080.jpg",
        ];

        $winter = [
            "winter-canyon.jpg",
            "winter-nature-1534277951821-1106.jpg",
            "winter-nature_7-wallpaper-1920x1080.jpg",
            "winter-photo-1521815049196-8a76f26a2135.jpg",
            "winter-snowy_road_winter_landscape-wallpaper-1920x1080.jpg",
            "winter-snowy_trees_winter_scenery-wallpaper-1920x1080.jpg",
            "winter-yosemite_winter_photography-wallpaper-1920x1080.jpg",
        ];

        $space = [
            "space-dust-4k.jpg",
            "space-dust75208.jpg",
            "space-dust1058585.png",
            "space-galaxy75083.jpg",
            "space-spiral_galaxy_4-wallpaper-1920x1080.jpg",
            "space-widescreen-wallpaper_110931553_30.jpg",
        ];

        $images = array_merge($spring, $summer, $autumn, $winter, $space);

        shuffle($images);

        $randomisedImages = array_slice($images, 0, 8);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'randomised_images' => $randomisedImages,
            'spring' => array_slice($spring, 0, 2),
            'summer' => array_slice($summer, 0, 2),
            'autumn' => array_slice($autumn, 0, 2),
            'winter' => array_slice($winter, 0, 2),
            'space' => array_slice($space, 0, 2),
        ]);
    }
}
