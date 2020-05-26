<?php

namespace App\Controller;

use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(PaginatorInterface $paginator, Request $request)
    {
        # wszystkie zdjęcia
        $images = [
            'spring-blue_gray_gnatcatcher_bird_spring-wallpaper-1920x1080.jpg',
            'spring-bluebells_flowers_woods_spring-wallpaper-1920x1080.jpg',
            'spring-colorful_spring_gardens_holland_netherlands-wallpaper-1920x1080.jpg',
            'spring-forest-1523468798622-788.jpg',
            'spring-sakura_spring_3-wallpaper-1920x1080.jpg',
            'spring-sora-sagano-639761-unsplash.jpg',
            'summer-countryside_chapel-wallpaper-5120x2880.jpg',
            'summer-nature-1523468860044-1522.jpg',
            'summer-photo-1455463640095-c56c5f258548.jpg',
            'summer-private_resort-wallpaper-2560x1440.jpg',
            'summer-tropical_beach_resorts-wallpaper-1920x1080.jpg',
            'autumn-lake_towada_japan-wallpaper-5120x2880.jpg',
            'autumn-photo-1446329813274-7c9036bd9a1f.jpg',
            'autumn-photo-1508255139162-e1f7b7288ab7.jpg',
            'autumn-vintage_woods-wallpaper-3840x2160.jpg',
            'winter-canyon.jpg',
            'winter-nature-1534277951821-1106.jpg',
            'winter-photo-1521815049196-8a76f26a2135.jpg',
            'winter-nature_7-wallpaper-1920x1080.jpg',
            'winter-snowy_road_winter_landscape-wallpaper-1920x1080.jpg',
            'winter-snowy_trees_winter_scenery-wallpaper-1920x1080.jpg',
            'winter-yosemite_winter_photography-wallpaper-1920x1080.jpg',
            'space-dust75068.jpg',
            'space-dust75208.jpg',
            'space-dust1058585.png',
            'space-galaxy75083.jpg',
            'space-moon.jpg',
            'space-spiral_galaxy_4-wallpaper-1920x1080.jpg',
            'space-widescreen-wallpaper_110931553_30.jpg',
        ];

        # paginacja
        $pagination = $paginator->paginate(
            $images,
            $request->query->getInt('page', 1) /*current page number*/,
            6 /*images per page*/
        );

        # szablon twig
        return $this->render('gallery/index.html.twig', [
            'images' => $pagination
        ]);
    }
}
