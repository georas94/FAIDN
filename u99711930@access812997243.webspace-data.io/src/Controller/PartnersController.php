<?php

namespace App\Controller;

use App\Repository\PartnersRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PartnersController extends AbstractController
{
    /**
     * @Route("/partenaires", name="partners_home")
     */
    public function index(PartnersRepository $partnersRepository)
    {

        
        return $this->render('partners/index.html.twig', [
            'institutionnelsImages' => $partnersRepository->findInstitutionnels(),
            'privesImages' => $partnersRepository->findPrives(),
            'mediasImages' => $partnersRepository->findMedias(),
            'associatifImages' => $partnersRepository->findAssociatif()
            ]);
    }
}
