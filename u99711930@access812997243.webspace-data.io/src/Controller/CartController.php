<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Payment;
use App\Service\Cart\CartService;
use Respect\Validation\Validator as v;
use App\Repository\CartRepository;

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

        $errors = [];
        if (!empty($_POST)) {

            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
            
            
            if(!v::notEmpty()->length(5, null)->validate($post['firstname'])){
                $errors[] = 'Votre Nom/Prénom doit contenir au moins 5 caractères...';
            }
            
            if(!v::notEmpty()->email()->validate($post['email'])){
                $errors[] = 'Votre email ne respecte pas le format requis...';
            }            
            if(!v::notEmpty()->length(10, null)->validate($post['address'])){
                $errors[] = 'Votre adresse doit contenir au moins 10 caratères...';
            }            
            if(!v::notEmpty()->length(3, null)->validate($post['city'])){
                $errors[] = 'Votre ville doit contenir au moins 3 caractères...';
            }            
            if(!v::notEmpty()->length(4, null)->validate($post['zip'])){
                $errors[] = 'votre code postal doit contenir au moins 4 chiffres, 0000 pour l\'étranger...';
            }            
            if(!v::notEmpty()->length(5, null)->validate($post['country'])){
                $errors[] = 'Le nom de votre pays doit contenir au moins 5 caractères...';
            }            
            if(!v::notEmpty()->length(8, null)->validate($post['phone'])){
                $errors[] = 'Votre numéro doit contenir au moins 8 caractères...';
            }

       

            $total = (float)$_POST['total'];

            //On définit notre API secret
            \Stripe\Stripe::setApiKey('sk_test_51GzVsLFZQOL2CP5OzjUkMlrNfEHH3FBmD7HkHJ3lfmj8wvFjuGuwu1B0zxRxSsdLwbVvbAMGgWqn4hynE8le7JVd00EaD2I658');

            //On définit notre intention, ça se fait avant le paiement
            $intent = \Stripe\PaymentIntent::create([
                'amount' => $total*100, 
                'currency' => 'eur',
                //'payment_method_types' => ['card'],
                //'receipt_email' => 'jenny.rosen@example.com',
              ]);
            
            $clientSecret = implode(array('client_secret' => $intent->client_secret));

            $cart = new Cart();
            $cart->setUsername($_POST['firstname']);

            if (isset($post['entrepriseCheckbox']) && !empty($post['entrepriseCheckbox'])) {
                $cart->setUserCategory($post['entrepriseCheckbox']);
            }elseif (isset($post['particulierCheckbox']) && !empty($post['particulierCheckbox'])) {
                $cart->setUserCategory($post['particulierCheckbox']);
            }else {
                $cart->setUserCategory('Non cochée');
            }

            $fullCart = $cartService->getFullCart();
            
            $cart->setContent($_POST['content']);
            
            $date = date_timestamp_get(new \DateTime());

            $cart->setCreatedAt($date);
            
            
            if(count($errors) === 0){

                $formValid = true;
            
                $email = $_POST['email'];
                
                
                $cart->setEmail($_POST['email']);
                $cart->setAddress($_POST['address']);
                $cart->setVille($_POST['city']);
                $cart->setPostalCode($_POST['zip']);
                $cart->setPhone($_POST['phone']);
                $cart->setCountry($_POST['country']);
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
            'errors_form'=>$errors ??null
            ]);
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
