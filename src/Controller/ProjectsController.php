<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/nos-projets", name="projects_home")
     */
    public function index(ArticlesRepository $articles)
    {
        $allArticles = $articles->findAllOrderProject();

        
        return $this->render('projects/index.html.twig', [
            'allArticles' => $allArticles
            ]);
    }


    /**
     * @Route("/nos-projets/{article}", name="projects_articles")
     */
    public function articles($article, ArticlesRepository $articles)
    {

        
        $currentArticle = $articles->findByName($article);

        return $this->render('projects/articles.html.twig', [
            'currentArticle' => $currentArticle
            ]);
    }
}
