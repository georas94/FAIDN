<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class MissionsController extends AbstractController
{
    /**
     * @Route("/missions", name="missions_home")
     */
    public function index(ArticlesRepository $articles)
    {

        $allArticles = $articles->findAllOrderEvent();



        return $this->render('missions/index.html.twig', [
            'allArticles' => $allArticles
            ]);
    }
    
    /**
     * @Route("/missions/{category}", name="missions_articles")
     */
    public function missionArticles($category, ArticlesRepository $articles)
    {

        $allArticles = $articles->findAllOrderMission($category);
        

   

        return $this->render('missions/category.html.twig', [
            'allArticles' => $allArticles
            ]);
    }
}
