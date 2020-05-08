<?php
/**
 * Lucky Number controller
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/luckynumber")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
           'number' => $number,
        ]);

        #return new Response(
        #    '<html><body>Your lucky number is: '.$number.'</body></html>'
        #);
    }
}
