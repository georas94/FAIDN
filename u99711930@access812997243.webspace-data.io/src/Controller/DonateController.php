<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DonateController extends AbstractController
{
    /**
     * @Route("/donate", name="donate_home")
     */
    public function index()
    {
        return $this->render('donate/index.html.twig', [

            ]);
    }






    
}
