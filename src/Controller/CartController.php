<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Payment;
use App\Form\CountryType;
use App\Service\Cart\CartService;
use App\Repository\CartRepository;

use Respect\Validation\Validator as v;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_home")
     */
    public function index( CartService $cartService, EntityManagerInterface $manager)
    {
        $fullCart = $cartService->getFullCart();
        foreach ($fullCart as $key => $value) {
            $quantity[] = $value['quantity'];
            foreach ($value as $content) {

            }
        }


        $form = $this->createForm(CountryType::class);



        $errors = [];

        //Paiement Stripe abandonné pour Paypal
        if (!empty($_POST)) {

            
            
            //if(!v::notEmpty()->length(5, null)->validate($post['country'])){
              //  $errors[] = 'Le nom de votre pays doit contenir au moins 5 caractères...';
            //}   

       

            $total = trim(strip_tags((float)$_POST['total']));

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

            $cart = new Cart();
            $cart->setUsername(trim(strip_tags($_POST['firstname'])));

            if (isset($_POST['entrepriseCheckbox']) && !empty($_POST['entrepriseCheckbox'])) {
                $cart->setUserCategory(trim(strip_tags($_POST['entrepriseCheckbox'])));
            }elseif (isset($_POST['particulierCheckbox']) && !empty($_POST['particulierCheckbox'])) {
                $cart->setUserCategory(trim(strip_tags($_POST['particulierCheckbox'])));
            }else {
                $cart->setUserCategory('Non cochée');
            }

            $fullCart = $cartService->getFullCart();
            
            $cart->setContent($_POST['content']);
            
            $date = date_timestamp_get(new \DateTime());

            $cart->setCreatedAt($date);
            
            
            if(count($errors) === 0){

                $formValid = true;
            
                $email = trim(strip_tags($_POST['email']));
                
                
                $cart->setEmail(trim(strip_tags($_POST['email'])));
                $cart->setAddress(trim(strip_tags($_POST['address'])));
                $cart->setVille(trim(strip_tags($_POST['city'])));
                $cart->setPostalCode(trim(strip_tags($_POST['zip'])));
                $cart->setPhone(trim(strip_tags($_POST['phone'])));
                $cart->setCountry($_POST['country']['country']);
                $manager->persist($cart);
                $manager->flush();

                return $this->render('security/payment.html.twig',[ 
                    'clientSecret' => $clientSecret,
                    'total' => $total,
                    'date'=> $date,
                    'email' => $email
                ]);
            }else{
                $formValid = false;
            }
        }


        $i = 0;
        return $this->render('cart/index.html.twig', [
            'items' => $cartService->getFullCart(),
            'total' =>$cartService->getTotal(),
            'i' => $i,
            'status_form' => $formValid ??null,
            'errors_form'=>$errors ??null,
            'form' => $form->createView()
        ]);
    }
    
    
    /**
     * @Route("/ajout-panier/{content}/{date}", name="content_cart_add")
     */
    public function addContent($content,$date, CartService $cartService, EntityManagerInterface $manager)
    {

        $cart = new Cart();
        $cart->setContent($content);
        $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $date = $date->format(DATE_RFC2822);
        $cart->setCreatedAt($date);

        $manager->persist($cart);
        $manager->flush();

        return $this->redirectToRoute('cart_home');
    }
    
    /**
     * @Route("/adhesion/add/{id}", name="cart_add")
     */
    public function add($id,CartService $cartService)
    {
        $cartService->add($id);

        return $this->redirectToRoute('home', [

            ]);
    }
    
    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id,CartService $cartService)
    {
        $cartService->remove($id);

        return $this->redirectToRoute('cart_home', [

            ]);
    }
    
    
}
