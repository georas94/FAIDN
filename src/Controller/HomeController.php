<?php

namespace App\Controller;

use App\Repository\CounterRepository;
use App\Repository\OptionsRepository;
use App\Repository\FooterDataRepository;
use App\Repository\CitationSliderRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CounterRepository $counterRepository, CitationSliderRepository $citationSliderRepository, OptionsRepository $optionsRepository)
    {

        $imagesSlider = $optionsRepository->findSliderImages();

        $allCitations = $citationSliderRepository->findAllByOrder();
        $counter = $counterRepository->findAll();

        return $this->render('home/index.html.twig',[
            'allCitations' => $allCitations,
            'counter' => $counter,
            'imagesSlider' => $imagesSlider
        ]);

    }
    




}
