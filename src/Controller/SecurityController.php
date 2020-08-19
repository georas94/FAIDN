<?php

namespace App\Controller;

use ReflectionClass;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cart;
use App\Entity\User;
use App\Entity\Payment;
use App\Entity\DonatePayment;
use App\Form\RegistrationType;
use \DrewM\MailChimp\MailChimp;
use App\Service\Cart\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer)
    {
        

        
        
        
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        
        $errors = [];
        if (!empty($_POST)) {
                        
            $secretKey = "6LdAoMAZAAAAADOcGjmNffKcpSrv9O1frbNWUPQm";

            // post request to server
            if(isset($_POST['g-recaptcha-response'])){
                $captcha=$_POST['g-recaptcha-response'];
            }
            
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
            $response = file_get_contents($url);
            $responseKeys = json_decode($response,true);
            $etatRecaptcha = $responseKeys['success'];

            
            if ($form->isSubmitted() && $form->isValid()) {
                
                $passClear = $_POST['registration']['password'];
                
                
                if ($etatRecaptcha == 'true') {
                    $formValid = true;

                    
                    $hash = $encoder->encodePassword($user, $user->getPassword());
                    $user->setPassword($hash);
                    $user->setRoles(["ROLE_USER"]);
                    $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
                    $date = $date->format(DATE_RFC2822);
                    $user->setCreatedAt($date);
                    $manager->persist($user);
                    $manager->flush();
                    
                    $message = (new \Swift_Message('Merci pour votre inscription ' . $user->getUsername() . ' !'))
                    ->setFrom('contact@faidn.com')
                    ->setTo($user->getEmail())
                    ->setBody('Merci pour votre inscription ' . $user->getUsername() 
                    .' Afin de vous connecter vous aurez besoin de votre email : ' . $user->getEmail() . ','
                    .' ainsi que de votre mot de passe : " '. $passClear.' ".' 
                    .' à bientôt sur le site !');
                    $mailer->send($message);
                    $data = $form->getData();
                    $statutNewsletter = $data->getNewsletter();
                    
                    if ($statutNewsletter == true) {
                        
                        $list_id = '3977e25105';
                        $authToken = 'e4e6b621d8cf7c27dac5e0bc8700488e-us17';
                
                        $postData = array(
                            "email_address" => $user->getEmail(), 
                            "status" => "subscribed", 
                            "merge_fields" => array(
                            "FNAME"=> $user->getUsername(),
                            "PHONE"=> $user->getPhone(),
                            )
                        );
                
                
                        $ch = curl_init('https://us19.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
                        curl_setopt_array($ch, array(
                            CURLOPT_POST => TRUE,
                            CURLOPT_RETURNTRANSFER => TRUE,
                            CURLOPT_HTTPHEADER => array(
                                'Authorization: apikey '.$authToken,
                                'Content-Type: application/json'
                            ),
                            CURLOPT_POSTFIELDS => json_encode($postData)
                        ));

                        $response = curl_exec($ch);

                    }
                    $this->addFlash(
                        'success',
                        'Merci pour votre inscription, vous pouvez vous connecter dès maintenant !'
                    );  
                    return $this->redirectToRoute('security_login');
                }else {

                    $formValid = false;
                    $errors[]= 'Captcha invalide, veuillez réessayer';

                    return $this->render('security/registration.html.twig', [
                        'form' =>$form->createView(),
                        'errors' => $errors ??null,
                        'formValid' =>$formValid ??null
                    ]);
                }

            }

        }
        return $this->render('security/registration.html.twig', [
            'form' =>$form->createView(),
            'formValid' => $formValid ??null,
            'errors' => $errors ??null,
        ]);
    }


    /**
     * @Route("/connexion", name="security_login")
     */
    public function login(){
        return $this->render('security/login.html.twig', [

        ]);
    }
    
    
    /**
     * @Route("/deconnexion", name="security_logout")
     */
    public function logout(){}

    


    /**
     * @Route("/adherant", name="security_member")
     */
    public function index(){



        return $this->render('security/member.html.twig', [

        ]);
    }



    
    /**
     * @Route("/paiement", name="security_payment")
     */
    public function payment(){

        if (!empty($_POST['price']) && isset($_POST['price'])) {
            
            $price = (float)$_POST['price'];
            
            //On définit notre API secret
            \Stripe\Stripe::setApiKey('sk_test_51GzVsLFZQOL2CP5OzjUkMlrNfEHH3FBmD7HkHJ3lfmj8wvFjuGuwu1B0zxRxSsdLwbVvbAMGgWqn4hynE8le7JVd00EaD2I658');
            
            //On définit notre intention, ça se fait avant le paiement
            $intent = \Stripe\PaymentIntent::create([
                'amount' => $price*100, 
                'currency' => 'eur',
                //'payment_method_types' => ['card'],
                //'receipt_email' => 'jenny.rosen@example.com',
                ]);
                
                $clientSecret = implode(array('client_secret' => $intent->client_secret));

            return $this->render('security/payment.html.twig',[ 
                'clientSecret' => $clientSecret,
          
            ]);

        }else{
            return $this->redirectToRoute('home');
        }
        
    }


    /**
     * @Route("/addCart/{info}", name="security_addCart")
     */
    public function addCart($info, \Swift_Mailer $mailer, CartService $cartService, EntityManagerInterface $entityManager, Request $request){
        
        
        $payment = new Payment();
        $payment->setStatus(true);
        
        if ($payment->setStatus(true) == true) {
            $path = $request->getPathInfo();
            $date = substr($path, 9, 10);
            $email = substr($path, 19);
            
            $payment->setTimestamp($date);
            $payment->setEmail($email);
            $entityManager->persist($payment);
            $entityManager->flush();
            
            $message = (new \Swift_Message('Merci pour achat !'))
            ->setFrom('contact@faidn.com')
            ->setTo($email)
            ->setBcc('contact@faidn.com')
            ->setBody('Ceci est le mail de confirmation d\'achat. Vous recevrez bientôt un mail contenant votre carte d\'adhérant !');
            $mailer->send($message); // a remonter
            }
            

        return $this->render('security/payment.html.twig', [
            'date'=> $date ??null,
            'email' => $email ??null
        ]);
    }
    
    /**
     * @Route("/security/addDonate/{info}", name="security_addDonate")
     */
    public function addDonate($info, \Swift_Mailer $mailer, EntityManagerInterface $entityManager, Request $request){
        
        
        $payment = new DonatePayment();
        $payment->setStatus(true);
        
        if ($payment->setStatus(true) == true) {
            $path = $request->getPathInfo();
            $date = substr($path, 20,-21);
            $email = substr($path, 30);
            
            $payment->setTimestamp($date);
            $payment->setEmail($email);
            $entityManager->persist($payment);
            $entityManager->flush();
            
            $message = (new \Swift_Message('Merci pour votre don !'))
            ->setFrom('contact@faidn.com')
            ->setTo($email)
            ->setBcc('contact@faidn.com')
            ->setBody('Ceci est le mail de confirmation de don. Vous recevrez bientôt un mail de notre part !');
            $mailer->send($message); // a remonter
            }
            

        return $this->render('security/donatePayment.html.twig', [
            'date'=> $date ??null,
            'email' => $email ??null
        ]);
    }

    
}
