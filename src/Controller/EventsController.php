<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class EventsController extends AbstractController
{
    /**
     * @Route("/evenements", name="events_home")
     */
    public function index(ArticlesRepository $articles)
    {

        $allArticles = $articles->findAllOrderEvent();
        $last2Events = $articles->findAllLastEvents();

        return $this->render('events/index.html.twig', [
            'allArticles' => $allArticles,
            'last2Events' => $last2Events

            ]);
    }
    
    /**
     * @Route("/evenements/{article}", name="events_articles")
     */
    public function articles($article, ArticlesRepository $articles)
    {

        
        $currentArticle = $articles->findByName($article);


        return $this->render('events/articles.html.twig', [
            'currentArticle' => $currentArticle
            ]);
    }
}
