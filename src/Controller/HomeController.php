<?php
/**
 * Home controller.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    /**
     * Index function
     *
     * @return Response
     *
     * @Route(
     *     "/",
     *     name="home"
     * )
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
        ]);
    }
}
