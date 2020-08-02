<?php

namespace App\Controller;

use App\Entity\Messages;
use Respect\Validation\Validator as v;

use App\Repository\FooterDataRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_home")
     */
    public function index(FooterDataRepository $footerDataRepository, EntityManagerInterface $manager, \Swift_Mailer $mailer)
    {

        $post = [];
        $errors = [];

        $footerData = $footerDataRepository->findAll();


        foreach ($footerData as $value) {
            $instagram = $value->getInstagram();
            $messenger = $value->getMessenger();
            $linkedIn = $value->getLinkedIn();
            $findUs = $value->getFindUs();
            $tel1 = $value->getTel1();
            $tel2 = $value->getTel2();
            $tel3 = $value->getTel3();
        }


        if (!empty($_POST)) {
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
    
            if(!v::notEmpty()->length(2, null)->validate($post['name'])){
                $errors[] = 'Votre Nom/Prénom doit contenir au moins 4 lettres';
            }
            
            if(!v::notEmpty()->email()->validate($post['email'])){
                $errors[] = 'L\'email fournit n\'est pas valide.';
            }
            
            if(!v::notEmpty()->length(15, null)->validate($post['content'])){
                $errors[] = 'Votre message doit contenir au moins 15 caractères';
            }

            if (count($errors) == 0) {

                $formValid = true;
                $messages = new Messages();
                $messages->setName($post['name']);
                $messages->setEmail($post['email']);
                $messages->setContent($post['content']);
                $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
                $date = $date->format(DATE_RFC2822);
                $messages->setCreatedAt($date);
                $manager->persist($messages);            
                $manager->flush($messages);   
                
                $message = (new \Swift_Message('Merci pour votre message ' . $post['name'] . ' !'))
                ->setFrom('rashid@rashidtamboura.fr')
                ->setTo($post['email'])
                ->setBcc('rashid@rashidtamboura.fr')
                ->setBody('Merci pour votre message ' . $post['name'] 
                .'. Nous revenous vers vous au plus tôt, à bientôt sur notre site !');
                $mailer->send($message);
            } else {
                $formValid = false;
            }
        }

        return $this->render('contact/index.html.twig', [
            'formValid'    => $formValid ?? null,
            'errors'    => $errors ??null,
            'instagram'    => $instagram,
            'messenger'    => $messenger,
            'linkedIn'    => $linkedIn,
            'findUs'    => $findUs,
            'tel1'    => $tel1,
            'tel2'    => $tel2,
            'tel3'    => $tel3,
        ]);
    }
}
