<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CitationSliderRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CitationSliderRepository $citationSliderRepository)
    {


        $allCitations = $citationSliderRepository->findAllByOrder();

        return $this->render('home/index.html.twig',[
            'allCitations' => $allCitations
        ]);

    }



}
