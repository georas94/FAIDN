<?php

namespace App\Controller;

use Respect\Validation\Validator as v;
use App\Entity\Donate;
use App\Form\DonateType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MemberController extends AbstractController
{
    /**
     * @Route("/adhesion", name="member_home")
     */
    public function index(ProductRepository $productRepository, EntityManagerInterface $manager)
    {

        $form = $this->createForm(DonateType::class);
        $errors = [];
        if (!empty($_POST)) {
            

            $total = (float)trim(strip_tags($_POST['total']));

            //On définit notre API secret
            \Stripe\Stripe::setApiKey('VOTRE API KEY');

            //On définit notre intention, ça se fait avant le paiement
            $intent = \Stripe\PaymentIntent::create([
                'amount' => $total*100, 
                'currency' => 'eur',
                //'payment_method_types' => ['card'],
                //'receipt_email' => 'jenny.rosen@example.com',
            ]);
            
            $clientSecret = implode(array('client_secret' => $intent->client_secret));

            $donate = new Donate();
            $donate->setName(trim(strip_tags($_POST['name'])));

            if (isset($_POST['entrepriseCheckbox']) && !empty($_POST['entrepriseCheckbox'])) {
                $donate->setUserCategory($_POST['entrepriseCheckbox']);
            }elseif (isset($_POST['particulierCheckbox']) && !empty($_POST['particulierCheckbox'])) {
                $donate->setUserCategory($_POST['particulierCheckbox']);
            }else {
                $donate->setUserCategory('Non cochée');
            }
                        
            $date = date_timestamp_get(new \DateTime());

            $donate->setCreatedAt($date);

            $formValid = true;

            if(!v::notEmpty()->email()->validate($_POST['email'])){
                $errors[] = 'Vous devez fournir un email valide.';
            }
            
            if(!v::notEmpty()->length(8, null)->validate($_POST['address'])){
                $errors[] = 'Votre adresse doit contenir au moins 8 lettres.';
            }               
            if(!v::notEmpty()->length(4, null)->validate($_POST['name'])){
                $errors[] = 'Votre Nom/Prénom doit contenir au moins 4 lettres.';
            }                
            if(!v::notEmpty()->length(2, null)->validate($_POST['city'])){
                $errors[] = 'Votre ville doit contenir au moins 2 caractères.';
            }                
            if(!v::notEmpty()->length(2, null)->validate($_POST['zip'])){
                $errors[] = 'Votre code postal doit contenir au moins 4 chiffres';
            }                
            if(!v::notEmpty()->length(5, null)->validate($_POST['phone'])){
                $errors[] = 'Votre numéro de téléphone doit contenir au moins 5 chiffres';
            }
            
            if(!v::notEmpty()->length(1, null)->validate($_POST['total'])){
                $errors[] = 'Le montant de votre don doit être d\'au moins un euro.';
            }      
                
            
            if (count($errors) == 0) {
                $formValid = true;

            
                $email = trim(strip_tags($_POST['email']));
                
                
                $donate->setEmail(trim(strip_tags($_POST['email'])));
                $donate->setAddress(trim(strip_tags($_POST['address'])));
                $donate->setVille(trim(strip_tags($_POST['city'])));
                $donate->setPostalCode(trim(strip_tags($_POST['zip'])));
                $donate->setPhone(trim(strip_tags($_POST['phone'])));
                $donate->setCountry($_POST['donate']['country']);
                $donate->setAmount(trim(strip_tags($total)));
                $manager->persist($donate);
                $manager->flush();
                
                return $this->render('security/donatePayment.html.twig',[ 
                    'clientSecret' => $clientSecret,
                    'total' => $total,
                    'date'=> $date,
                    'email' => $email
                ]);

            }else {
                $formValid = false;
                
            }

        }

   
            
        return $this->render('member/index.html.twig', [
            'products'  => $productRepository->findAll(),
            'form' => $form->createView(),
            'errors' => $errors ??null,
            'formValid' => $formValid ??null,
        ]);

    }
    
}
