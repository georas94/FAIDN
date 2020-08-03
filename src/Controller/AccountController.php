<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;

use Respect\Validation\Validator as v;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AccountController extends AbstractController
{
    /**
     * @Route("/mon-compte", name="account_home")
     */
    public function index(EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer, Request $request)
    {

        $user = $this->getUser();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $userId = $user->getId();
   
        return $this->render('account/index.html.twig', [
            'username' => $username,
            'email' => $email,
            'userId' => $userId

        ]);
    }
    


}
