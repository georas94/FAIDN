<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class MemberController extends AbstractController
{
    /**
     * @Route("/adhesion", name="member_home")
     */
    public function index(ProductRepository $productRepository)
    {

        
        return $this->render('member/index.html.twig', [
            'products'  => $productRepository->findAll()
        ]);
    }
}
