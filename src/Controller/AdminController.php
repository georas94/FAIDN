<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Post;
use App\Entity\Counter;
use App\Entity\Product;
use App\Entity\Archives;
use App\Entity\Articles;
use App\Entity\Messages;
use App\Entity\Partners;
use App\Entity\FooterData;

use App\Entity\CitationSlider;
use App\Form\AdminArticleType;
use App\Repository\CartRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use App\Repository\CounterRepository;
use App\Repository\PaymentRepository;
use App\Repository\ProductRepository;
use Intervention\Image\ImageManager; 
use App\Repository\ArchivesRepository;
use App\Repository\ArticlesRepository;
use App\Repository\MessagesRepository;
use App\Repository\PartnersRepository;
use Respect\Validation\Validator as v;
use App\Repository\FooterDataRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CitationSliderRepository;
use Behat\Transliterator\Transliterator as tr;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\KernelInterface as BaseKernel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{


/**
 * @Route("/admin/get-google-analytics-data", name="analytics")
 */

    public function google(){

   

        function initializeAnalytics()
        {
            // Use the developers console and download your service account
            // credentials in JSON format. Place them in this directory or
            // change the key file location if necessary.
            $KEY_FILE_LOCATION = __DIR__ . '/faidn-283118-7191dd778863.json';

            // Create and configure a new client object.
            $client = new \Google_Client();
            $client->setApplicationName("Hello Analytics Reporting");
            $client->setAuthConfig($KEY_FILE_LOCATION);
            $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly', 'https://www.googleapis.com/auth/analytics']);
            $analytics = new \Google_Service_Analytics($client);
            return $analytics;
        }
    
    
        function getFirstProfileId($analytics) {
            // Get the user's first view (profile) ID.
        
            // Get the list of accounts for the authorized user.
            $accounts = $analytics->management_accounts->listManagementAccounts();
        
            if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();
        
            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                ->listManagementWebproperties($firstAccountId);
        
            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();
        
                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                    ->listManagementProfiles($firstAccountId, $firstPropertyId);
        
                if (count($profiles->getItems()) > 0) {
                $items = $profiles->getItems();
        
                // Return the first view (profile) ID.
                return $items[0]->getId();
        
                } else {
                throw new Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new Exception('No properties found for this user.');
            }
            } else {
            throw new Exception('No accounts found for this user.');
            }
        }
        
        function getResults($analytics, $profileId, $metric) {
            // Calls the Core Reporting API and queries for the number of sessions
            // for the last seven days.
            return $analytics->data_ga->get(
            'ga:'. $profileId,
            '30daysAgo',
            'today',
            'ga:'.$metric,
                array(
                    'dimensions'  => 'ga:country',
                    'sort'        => '-ga:sessions',
                    'max-results' => 10
                )
            );
        }
        
        function printResults($results) {
            // Parses the response from the Core Reporting API and prints
            // the profile name and total sessions.
            if (count($results->getRows()) > 0) {
        
            // Get the profile name.
            $profileName = $results->getProfileInfo()->getProfileName();
        
            // Get the entry for the first entry in the first row.
            $rows = $results->getRows();
            $sessions = $rows[0][0];
        
            // Print the results.
            print "First view (profile) found: $profileName\n";
            print "Total sessions: $sessions\n";
            } else {
            print "No results found.\n";
            }
        }

        $analytics = initializeAnalytics();
        $profile = getFirstProfileId($analytics);
        $results = getResults($analytics, $profile, 'sessions');
        $rows = $results->getRows();

        $data = array();
        foreach( $rows as $row ) {
        $data[] = array(
            'country'   => $row[0],
            'sessions'  => $row[1]
        );
        }

        json_encode( $data );


      return $this->json($data);
    }//FERMETURE GOOGLE

    /**
     * @Route("/admin", name="admin")
     */
    public function index(MessagesRepository $message, UserRepository $usersRepository, ArticlesRepository $articlesRepository, PaymentRepository $paymentRepository, BaseKernel $base)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();


        $emailCount = count($message->findAllLastestMessages());
        $usersCount = count($usersRepository->findAllByOrder());
        $articlesCount = count($articlesRepository->findAllOrder());
        $memberCount = count($paymentRepository->findPaymentStatusTrue());
        
        return $this->render('admin/index.html.twig', [
            'emailCount' => $emailCount,
            'usersCount' => $usersCount,
            'articlesCount' => $articlesCount,
            'memberCount' => $memberCount
            ]);
    }
    
    /**
     * @Route("/gestion-des-articles", name="view_all_articles_admin")
     */
    public function view_all_articles_admin(ArticlesRepository $articlesRepository)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();

        
        return $this->render('admin/viewAllArticles.html.twig', [
            'articles' => $articlesRepository->findAllOrder()
            ]);
    }
    
    /**
     * @Route("/admin/tous-les-utilisateurs", name="all_users_admin")
     */
    public function all_users_admin(UserRepository $userRepository)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();


        $names = json_decode(file_get_contents("http://country.io/names.json"), true);
        $usersById = $userRepository->findAllByOrder();

    
        
        return $this->render('admin/viewAllUsers.html.twig', [
            'users' => $userRepository->findAllByOrder()
            ]);
    }
    
    
    /**
     * @Route("/admin/ajouter-des-partenaires", name="partners_add_admin")
     */
    public function partners_add_admin(EntityManagerInterface $manager, PartnersRepository $partnersRepository)
    {
        
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
        
        /*Image partners*/
        $mimeTypesAllowed = [
            'png', 'jpeg', 'jpg', 'pjpeg',
            'webp'
        ];
        
        $maxSize = 10 * 1000 * 1000;
        
        if(!empty($_POST)){
            
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
            
            
            if(!v::notEmpty()->alnum('-')->length(2, null)->validate($post['partnerAdd'])){
                $errors[] = 'Vous devez y mettre un select hohoho';
            }
            
            
            if(!empty($_FILES) && !empty($_FILES['img1']) ){
                
                $rootFolder = $_SERVER['DOCUMENT_ROOT'];
                //dd($_SERVER['DOCUMENT_ROOT']);
                $uploadDir = 'assets/img/';
                
                $fileinfo = pathinfo($_FILES['img1']['name']);
                
                $mimeTypeDeMonFichierActuel = $fileinfo['extension'];
                
                if(in_array($mimeTypeDeMonFichierActuel, $mimeTypesAllowed)){
                    
                    if($_FILES['img1']['size'] < $maxSize){
                        
                        $chars_search = [' ', 'é', 'è', 'à', 'ù'];
                        $chars_replace= ['-', 'e', 'e', 'a', 'u'];
                        
                        $finalFileName = tr::transliterate(time().'-'.$_FILES['img1']['name']).'.png';
                        
                            if(!is_dir($uploadDir)){
                                if(!mkdir($uploadDir, 0777)){
                                    $errors[] = 'Un problème est survenu lors de la création du répértoire d\'upload';
                                }
                            }
                            $destination = $rootFolder.$uploadDir.$finalFileName;
                            
                            move_uploaded_file($_FILES['img1']['tmp_name'], $destination);
                            
                            $image = new ImageManager();
                            $image->make($destination)->fit(700, 460)->save();
                                
                        }
                        else {
                            $errors[] = 'Votre fichier est trop lourd (10Mo maxi)';
                        }
                    }
                    else {
                        $errors[] = 'Ce type de fichier n\'est pas autorisé';
                    }
                    
                    $partners = new Partners();
                    $partners->setCategory($post['partnerAdd']);
                    $partners->setImg1($finalFileName);
                    
                    $manager->persist($partners);
                    
                    $manager->flush();
                    
                    return $this->render('admin/index.html.twig', [
                        
                    ]);
                    }//Fermeture not empty FILES
                }//Fermeture not empty POST
                    
                    
            /*FIN Image uploads partners*/
                    
        return $this->render('admin/partnersAdd.html.twig', [
            'institutionnelsImages' => $partnersRepository->findInstitutionnels(),
            'privesImages' => $partnersRepository->findPrives(),
            'mediasImages' => $partnersRepository->findMedias(),
            'associatifImages' => $partnersRepository->findAssociatif(),
            
            ]);
        }

    /**
     * @Route("/admin/mettre-a-jour-partenaire/{id}", name="partners_update_admin")
     */
    public function partners_update_admin(EntityManagerInterface $manager, $id, PartnersRepository $partnersRepository)
    {

                    

        /*Image update partners*/
        
        $mimeTypesAllowed = [
            'png', 'jpeg', 'jpg', 'pjpeg',
            'webp'
        ];
        
        $maxSize = 10 * 1000 * 1000;
        
  
            
            
        if(!empty($_FILES) && !empty($_FILES['imageUpdate']) ){

            
            $rootFolder = $_SERVER['DOCUMENT_ROOT'];
            //dd($_SERVER['DOCUMENT_ROOT']);
            $uploadDir = 'assets/img/';
            
            $fileinfo = pathinfo($_FILES['imageUpdate']['name']);
            
            $mimeTypeDeMonFichierActuel = $fileinfo['extension'];
            
            if(in_array($mimeTypeDeMonFichierActuel, $mimeTypesAllowed)){


                
                if($_FILES['imageUpdate']['size'] < $maxSize){
                    
                    $chars_search = [' ', 'é', 'è', 'à', 'ù'];
                    $chars_replace= ['-', 'e', 'e', 'a', 'u'];
                    
                    $finalFileName = tr::transliterate(time().'-'.$_FILES['imageUpdate']['name']).'.png';
                    
                    if(!is_dir($uploadDir)){
                        if(!mkdir($uploadDir, 0777)){
                            $errors[] = 'Un problème est survenu lors de la création du répértoire d\'upload';
                        }
                    }
                    $destination = $rootFolder.'/'.$uploadDir.$finalFileName;
                    
                    move_uploaded_file($_FILES['imageUpdate']['tmp_name'], $destination);
                    
                    $image = new ImageManager();
                    $image->make($destination)->fit(700, 460)->save();
                    
                }
                else {
                    $errors[] = 'Votre fichier est trop lourd (10Mo maxi)';
                }
            }
            else {
                $errors[] = 'Ce type de fichier n\'est pas autorisé';
            }
            
                $entityManager = $this->getDoctrine()->getManager();
                $partners = $entityManager->getRepository(Partners::class)->find($id);
                
                if ($_POST['imgNumber'] == "img1") {                    
                    $partners->setImg1($finalFileName);
                }elseif ($_POST['imgNumber'] == "img2") {
                    $partners->setImg2($finalFileName);
                }elseif ($_POST['imgNumber'] == "img3") {
                    $partners->setImg3($finalFileName);
                }elseif ($_POST['imgNumber'] == "img4") {
                    $partners->setImg4($finalFileName);
                }elseif ($_POST['imgNumber'] == "img5") {
                    $partners->setImg5($finalFileName);
                }elseif ($_POST['imgNumber'] == "img6") {
                    $partners->setImg6($finalFileName);
                }elseif ($_POST['imgNumber'] == "img7") {
                    $partners->setImg7($finalFileName);
                }elseif ($_POST['imgNumber'] == "img8") {
                    $partners->setImg8($finalFileName);
                }elseif ($_POST['imgNumber'] == "img9") {
                    $partners->setImg9($finalFileName);
                }elseif ($_POST['imgNumber'] == "img10") {
                    $partners->setImg10($finalFileName);
                }elseif ($_POST['imgNumber'] == "img11") {
                    $partners->setImg11($finalFileName);
                }elseif ($_POST['imgNumber'] == "img12") {
                    $partners->setImg12($finalFileName);
                }elseif ($_POST['imgNumber'] == "img13") {
                    $partners->setImg13($finalFileName);
                }elseif ($_POST['imgNumber'] == "img14") {
                    $partners->setImg14($finalFileName);
                }elseif ($_POST['imgNumber'] == "img15") {
                    $partners->setImg15($finalFileName);
                }elseif ($_POST['imgNumber'] == "img16") {
                    $partners->setImg16($finalFileName);
                }elseif ($_POST['imgNumber'] == "img17") {
                    $partners->setImg17($finalFileName);
                }elseif ($_POST['imgNumber'] == "img18") {
                    $partners->setImg18($finalFileName);
                }elseif ($_POST['imgNumber'] == "img19") {
                    $partners->setImg19($finalFileName);
                }elseif ($_POST['imgNumber'] == "img20") {
                    $partners->setImg20($finalFileName);
                }elseif ($_POST['imgNumber'] == "img21") {
                    $partners->setImg21($finalFileName);
                }elseif ($_POST['imgNumber'] == "img22") {
                    $partners->setImg22($finalFileName);
                }elseif ($_POST['imgNumber'] == "img23") {
                    $partners->setImg23($finalFileName);
                }elseif ($_POST['imgNumber'] == "img24") {
                    $partners->setImg24($finalFileName);
                }elseif ($_POST['imgNumber'] == "img25") {
                    $partners->setImg25($finalFileName);
                }elseif ($_POST['imgNumber'] == "img26") {
                    $partners->setImg26($finalFileName);
                }elseif ($_POST['imgNumber'] == "img27") {
                    $partners->setImg27($finalFileName);
                }elseif ($_POST['imgNumber'] == "img28") {
                    $partners->setImg28($finalFileName);
                }elseif ($_POST['imgNumber'] == "img29") {
                    $partners->setImg29($finalFileName);
                }elseif ($_POST['imgNumber'] == "img30") {
                    $partners->setImg30($finalFileName);
                }
                                                
                $manager->flush();
                $formValid = true;                
                
                return $this->render('admin/partnersAdd.html.twig', [
                    'formValid' => $formValid,
                    'institutionnelsImages' => $partnersRepository->findInstitutionnels(),
                    'privesImages' => $partnersRepository->findPrives(),
                    'mediasImages' => $partnersRepository->findMedias(),
                    'associatifImages' => $partnersRepository->findAssociatif(),
                ]);
            }//Fermeture not empty FILES
                
                    
        /*FIN Image update partners*/


        return $this->render('admin/updatePartners.html.twig', [
            'partnerId' => $partnersRepository->findPartnerById($id),
        ]);
    }
                    
    /**
     * @Route("/admin/creer-article", name="article_add_admin")
     */
    public function article_add_admin(EntityManagerInterface $manager, ArticlesRepository $articlesRepository)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
        $form = $this->createForm(AdminArticleType::class);


        /*Image uploads*/
        $mimeTypesAllowed = [
        'png', 'jpeg', 'jpg', 'pjpeg',
        'webp'
        ];

        $maxSize = 10 * 1000 * 1000;

        if(!empty($_POST)){
            $articles = new Articles();
            
            if($_FILES['img1']['size'] && $_FILES['img2']['size'] && $_FILES['img3']['size'] > 0 ){

                dd($_FILES);
                
                $rootFolder = $_SERVER['DOCUMENT_ROOT'];
                $uploadDir = 'assets/img/';

                
                $fileinfo = pathinfo($_FILES['img1']['name']);
                $fileinfo2 = pathinfo($_FILES['img2']['name']);
                $fileinfo3 = pathinfo($_FILES['img3']['name']);
                
                $mimeTypeDeMonFichierActuel = $fileinfo['extension'];
                $mimeTypeDeMonFichierActuel2 = $fileinfo2['extension'];
                $mimeTypeDeMonFichierActuel3 = $fileinfo3['extension'];
                
                if(in_array($mimeTypeDeMonFichierActuel, $mimeTypesAllowed)){
                    
                    if($_FILES['img1']['size'] && $_FILES['img2']['size'] && $_FILES['img3']['size'] < $maxSize){

                        $chars_search = [' ', 'é', 'è', 'à', 'ù'];
                        $chars_replace= ['-', 'e', 'e', 'a', 'u'];
                        
                        $finalFileName = tr::transliterate(time().'-'.$_FILES['img1']['name']) .'.png';
                        $finalFileName2 = tr::transliterate(time().'-'.$_FILES['img2']['name']) .'.png';
                        $finalFileName3 = tr::transliterate(time().'-'.$_FILES['img3']['name']) .'.png';
                        if(!is_dir($uploadDir)){
                            if(!mkdir($uploadDir, 0777)){
                                $errors[] = 'Un problème est survenu lors de la création du répértoire d\'upload';
                            }
                        }
                        $destination = $rootFolder.'/'.$uploadDir.$finalFileName;
                        $destination2 = $rootFolder.'/'.$uploadDir.$finalFileName2;
                        $destination3= $rootFolder.'/'.$uploadDir.$finalFileName3;
                        
                        move_uploaded_file($_FILES['img1']['tmp_name'], $destination);
                        move_uploaded_file($_FILES['img2']['tmp_name'], $destination2);
                        move_uploaded_file($_FILES['img3']['tmp_name'], $destination3);
                        $image = new ImageManager();
                        $image->make($destination)->fit(700, 460)->save();
                        $image->make($destination2)->fit(700, 460)->save();
                        $image->make($destination3)->fit(700, 460)->save();
                        $articles->setImg1($finalFileName);
                        $articles->setImg2($finalFileName2);
                        $articles->setImg3($finalFileName3);
                        
                        
                        //$img1 = Image::make($_FILES['img1']);
                    }
                    else {
                        $errors[] = 'Votre fichier est trop lourd (10Mo maxi)';
                    }
                }
                else {
                    $errors[] = 'Ce type de fichier n\'est pas autorisé';
                }
               
                }//Fermeture not empty FILES

                $articles->setTitle($_POST['admin_article']['title']);
                $articles->setContent1($_POST['admin_article']['content1']);
                $articles->setCategory($_POST['category']);

                $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
                $date = $date->format(DATE_RFC2822);
                $articles->setCreatedAt($date);
                
                $manager->persist($articles);
                
                $manager->flush();
                $formValid = true;
                
                return $this->render('admin/viewAllArticles.html.twig', [
                    'formValid' => $formValid ??null,
                    'articles' => $articlesRepository->findAllOrder(),
                    ]);





                
            }//Fermeture not empty POST
                
                
            /*FIN Image uploads articles*/
            
        return $this->render('admin/articleAdd.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    
    /**
     * @Route("/admin/modifier-article/{id}", name="article_update_admin")
     */
    public function article_update_admin($id,EntityManagerInterface $manager, ArticlesRepository $articlesRepository)
    {
        
        
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
        $form = $this->createForm(AdminArticleType::class);
        
        $articleById = $articlesRepository->findById($id);

      foreach ($articleById as $value) {
          $content1 = $value->getContent1();
          $category = $value->getCategory();
          $title = $value->getTitle();          
        }
        
        

        /*Image uploads*/
        $mimeTypesAllowed = [
        'png', 'jpeg', 'jpg', 'pjpeg',
        'webp'
        ];

        $maxSize = 10 * 1000 * 1000;
        
        if(!empty($_FILES) && !empty($_FILES['img1']) && !empty($_FILES['img2']) && !empty($_FILES['img3']) ){
            
            $rootFolder = $_SERVER['DOCUMENT_ROOT'];
            $uploadDir = 'assets/img/';
            
            $fileinfo = pathinfo($_FILES['img1']['name']);
            $fileinfo2 = pathinfo($_FILES['img2']['name']);
            $fileinfo3 = pathinfo($_FILES['img3']['name']);
            
            $mimeTypeDeMonFichierActuel = $fileinfo['extension'];
            $mimeTypeDeMonFichierActuel2 = $fileinfo2['extension'];
            $mimeTypeDeMonFichierActuel3 = $fileinfo3['extension'];
            
            if(in_array($mimeTypeDeMonFichierActuel, $mimeTypesAllowed)){
                
                if($_FILES['img1']['size'] && $_FILES['img2']['size'] && $_FILES['img3']['size'] < $maxSize){
                    
                    $chars_search = [' ', 'é', 'è', 'à', 'ù'];
                    $chars_replace= ['-', 'e', 'e', 'a', 'u'];
                    
                    $finalFileName = tr::transliterate(time().'-'.$_FILES['img1']['name']) .'.png';
                    $finalFileName2 = tr::transliterate(time().'-'.$_FILES['img2']['name']) .'.png';
                    $finalFileName3 = tr::transliterate(time().'-'.$_FILES['img3']['name']) .'.png';
                    if(!is_dir($uploadDir)){
                        if(!mkdir($uploadDir, 0777)){
                            $errors[] = 'Un problème est survenu lors de la création du répértoire d\'upload';
                        }
                    }
                    $destination = $rootFolder.'/'.$uploadDir.$finalFileName;
                    $destination2 = $rootFolder.'/'.$uploadDir.$finalFileName2;
                    $destination3= $rootFolder.'/'.$uploadDir.$finalFileName3;
                    
                    
                    move_uploaded_file($_FILES['img1']['tmp_name'], $destination);
                    move_uploaded_file($_FILES['img2']['tmp_name'], $destination2);
                    move_uploaded_file($_FILES['img3']['tmp_name'], $destination3);
                    $image = new ImageManager();
                    $image->make($destination)->fit(700, 460)->save();
                    $image->make($destination2)->fit(700, 460)->save();
                    $image->make($destination3)->fit(700, 460)->save();
                    
                    
                    //$img1 = Image::make($_FILES['img1']);
                }
                else {
                    $errors[] = 'Votre fichier est trop lourd (10Mo maxi)';
                }
            }
            else {
                $errors[] = 'Ce type de fichier n\'est pas autorisé';
            }
            
            $entityManager = $this->getDoctrine()->getManager();
            $articles = $entityManager->getRepository(Articles::class)->find($id);     

            $articles->setTitle($_POST['admin_article']['title']);
            $articles->setContent1($_POST['admin_article']['content1']);
          
            $articles->setImg1($finalFileName);
            $articles->setImg2($finalFileName2);
            $articles->setImg3($finalFileName3);
            $articles->setCategory($_POST['category']);
            $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
            $date = $date->format(DATE_RFC2822);
            $articles->setCreatedAt($date);
            
            $manager->persist($articles);
            
            $manager->flush();
            $updateStatus = true;
            return $this->render('admin/viewAllArticles.html.twig', [
                'articles' => $articlesRepository->findAllOrder(),
                'updateStatus' => $updateStatus
                
            ]);
            }//Fermeture not empty FILES
            
            /*FIN Image uploads articles*/
            
        return $this->render('admin/updateArticle.html.twig', [
            'content1' => $content1,
            'category' => $category,
            'title' => $title,
            'form' => $form->createView()
        ]);
    }

        /**
     * @Route("/admin/supprimer-article/{id}", name="delete_article_admin")
     */
    public function delete_article_admin($id,ArticlesRepository $articlesRepository, EntityManagerInterface $entityManager)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();

        $repository = $this->getDoctrine()->getRepository(Articles::class);

        $articlesById = $repository->find($id);
        
        $archives = new Archives();
        $archives->setTitle($articlesById->getTitle());
        $archives->setContent($articlesById->getContent1());
        $entityManager->persist($archives);

        $entityManager->remove($articlesById);
        $entityManager->flush();
        
        return $this->redirectToRoute('view_all_articles_admin');
    }
    


    /**
     * @Route("/admin/messages", name="messages_view")
     */
    public function messages_view(MessagesRepository $allMessages)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
        $date = new \DateTime('now', new \DateTimeZone('Europe/Paris'));
        $date = $date->format(DATE_RFC2822);


        foreach ($allMessages->findAllLastestMessages() as $value) {
            $created_at [] = $value->getCreatedAt();
        }

        
        return $this->render('admin/messagesView.html.twig', [
            'allMessages' => $allMessages->findAllLastestMessages(),
            'created_at' => $created_at

        ]);
    }

    /**
     * @Route("/admin/commandes", name="sales_home_admin")
     */
    public function sales_home_admin(EntityManagerInterface $manager, CartRepository $cart, PaymentRepository $payment)
    {

        $fullCart = $cart->findAllDesc();

        // foreach ($fullCart as $item) {
        //     $username = $item->getUsername();
        //     $content = $item->getContent();
        //     $createdAt = $item->getCreatedAt();
        //     $email = $item->getEmail();
        //     $adresse = $item->getAddress();
        //     $ville = $item->getVille();
        //     $postalCode = $item->getPostalCode();
        // }

        //dd($fullCart);
        $quantity = [];
        $product = [];
        foreach ($cart->findAllDesc()  as $key => $item) {
            $cartsContents = $item->getContent();

                
            if (stripos($cartsContents, '"Entreprise"') !== false) {
                $quantity [] = array('quantity' => substr_count($cartsContents, 'quantity'));
                $product[] = array('catégorie' => 'Entreprise');
            }
            elseif (stripos($cartsContents, 'Fédération') !== false) {
                $quantity [] = array('quantity' => substr_count($cartsContents, 'quantity'));

                
                $product[] = array('catégorie' => 'Fédération');
            }
            
            elseif (stripos($cartsContents, 'Association') !== false) {
                $quantity [] = array('quantity' => substr_count($cartsContents, 'quantity'));

                $product[] = array('catégorie' => 'Association');            
            }
            
            elseif (stripos($cartsContents, 'Particulier') !== false) {
                $quantity [] = array('quantity' => substr_count($cartsContents, 'quantity'));
                $product[] = array('catégorie' => 'Particulier');            

            }
                
            elseif (stripos($cartsContents, 'ONG') !== false) {
                $quantity [] = array('quantity' => substr_count($cartsContents, 'quantity'));
                $product[] = array('catégorie' => 'ONG');            
                }
            else {
                $product[] = 'Panier vide';
            }
            
        }

        $email = [];

        foreach ($cart->findAllDesc() as $key => $value) {
            $email = $value->getEmail();
        }

        
        

        
        return $this->render('admin/salesHome.html.twig', [
            'cart' => $fullCart ??null,
            'quantity' => $quantity ??null,
            'product' => $product ??null,
            'payment' => $payment->findPayment()
        ]);
    }


    /**
     * @Route("/admin/gestion-des-produits", name="product_management_view")
     */
    public function product_management_view(ProductRepository $productRepository)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
       
        


        
        return $this->render('admin/productManagement.html.twig', [
                'products' => $productRepository->findAllOrder()
        ]);
    }
    
    /**
     * @Route("/admin/modification-produit/{id}", name="product_update_admin")
     */
    public function product_update($id,ProductRepository $productRepository)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();
       
        $product = $productRepository->findById($id);

        

        foreach ($product as $value) {
            $productCategory = $value->getCategory();
            $productTitle = $value->getTitle();
            $productPrice = $value->getPrice();
        }


        if(!empty($_POST)){
            
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
            
            
            if(!v::notEmpty()->alnum('-')->length(2, null)->validate($post['productTitle'])){
                $errors[] = 'Longueur du titre non valide';
            }
            
            if(!v::floatType()->validate($post['productPrice'])){
                $errors[] = 'Prix non valide';
            }
            
            $entityManager = $this->getDoctrine()->getManager();
            $productToUpdate = $entityManager->getRepository(Product::class)->find($id);
            
            $productToUpdate->setTitle($post['productTitle']);
            $productToUpdate->setPrice($post['productPrice']);
            $entityManager->persist($productToUpdate);
            $entityManager->flush();

            return $this->redirectToRoute('product_management_view');
        }


                
        
        
        return $this->render('admin/updateProduct.html.twig', [
            'productCategory' => $productCategory,
            'productTitle' => $productTitle,
            'productPrice' => $productPrice,
        ]);
    }


    /**
     * @Route("/admin/envoyer-adhesion", name="product_send_admin")
     */
    public function product_send_admin(ProductRepository $productRepository, PaymentRepository $payment, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->getUser();


        $errors = [];
            if (!empty($_POST)) {
                
                foreach($_POST as $key => $value){
                    $post[$key] = trim(strip_tags($value));
                }
                
                
                
                if(!v::notEmpty()->validate($post['email'])){
                    $errors[] = 'Un choix est obligatoire';
                }
                
                
                
                
                if(!v::notEmpty()->alnum('-')->length(25, null)->validate($post['content'])){
                    $errors[] = 'Votre contenu doit contenir au moins 25 caractères';
                }
                
                if(!v::notEmpty()->validate($post['category'])){
                    $errors[] = 'Un choix est obligatoire';
                }
                
                $message = (new \Swift_Message('Votre carte d\'adhésion est prête!'))
                ->setFrom('rashid@rashidtamboura.fr')
                ->setTo($post['email'])
                ->setBcc('rashid@rashidtamboura.fr')
                ->setBody('Ci-joint votre carte d\'adhérant !')
                ->setBody('Ci-bas votre nouvelle carte adhérant. En espérant vous revoir très vite !')
                ->addPart(' <img style="text-align-center;" src="http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl= '. $post['qrContent'].' "/>', 'text/html');
                
                
                //$mailer->send($message); // a remonter
                
                $actualMember = $payment->findPaymentByEmail($post['email']);
                foreach ($actualMember as $value) {
                    $manager->remove($value);
                }
                $manager->flush();
                $formValid = true;
                
            }
            
        return $this->render('admin/productSend.html.twig', [
            'products' => $productRepository->findAllOrder(),
            'payments' => $payment->findPaymentStatusTrue(),
            'errors' => $errors ??null,
            'formValid' => $formValid ??null
        ]);
    }



     /**
     * @Route("/admin/archives", name="archives_admin")
     */
    public function archives_admin(ArchivesRepository $archivesRepository, PaymentRepository $payment, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $allArticles = $archivesRepository->findAllOrder();



            
        return $this->render('admin/archives.html.twig', [
            'allArticles' => $allArticles ??null
        ]);
    }
    
    /**
     * @Route("/admin/organic-searches", name="organic_searches_admin")
     */
    public function organic_searches_admin(ProductRepository $productRepository, PaymentRepository $payment, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {



        function initializeAnalytics()
        {
            // Use the developers console and download your service account
            // credentials in JSON format. Place them in this directory or
            // change the key file location if necessary.
            $KEY_FILE_LOCATION = __DIR__ . '/faidn-283118-7191dd778863.json';

            // Create and configure a new client object.
            $client = new \Google_Client();
            $client->setApplicationName("Hello Analytics Reporting");
            $client->setAuthConfig($KEY_FILE_LOCATION);
            $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly', 'https://www.googleapis.com/auth/analytics']);
            $analytics = new \Google_Service_Analytics($client);
            return $analytics;
        }
    
    
        function getFirstProfileId($analytics) {
            // Get the user's first view (profile) ID.
        
            // Get the list of accounts for the authorized user.
            $accounts = $analytics->management_accounts->listManagementAccounts();
        
            if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();
        
            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                ->listManagementWebproperties($firstAccountId);
        
            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();
        
                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                    ->listManagementProfiles($firstAccountId, $firstPropertyId);
        
                if (count($profiles->getItems()) > 0) {
                $items = $profiles->getItems();
        
                // Return the first view (profile) ID.
                return $items[0]->getId();
        
                } else {
                throw new Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new Exception('No properties found for this user.');
            }
            } else {
            throw new Exception('No accounts found for this user.');
            }
        }
        
        function getResults($analytics, $profileId, $metric) {
            // Calls the Core Reporting API and queries for the number of organicSearches
            // for the last seven days.
            return $analytics->data_ga->get(
            'ga:'. $profileId,
            '30daysAgo',
            'today',
            'ga:'.$metric,
                array(
                    'dimensions'  => 'ga:country',
                    'sort'        => '-ga:organicSearches',
                    'max-results' => 10
                )
            );
        }
        
        function printResults($results) {
            // Parses the response from the Core Reporting API and prints
            // the profile name and total organicSearches.
            if (count($results->getRows()) > 0) {
        
            // Get the profile name.
            $profileName = $results->getProfileInfo()->getProfileName();
        
            // Get the entry for the first entry in the first row.
            $rows = $results->getRows();
            $organicSearches = $rows[0][0];
        
            // Print the results.
            print "First view (profile) found: $profileName\n";
            print "Total organicSearches: $organicSearches\n";
            } else {
            print "No results found.\n";
            }
        }

        $analytics = initializeAnalytics();
        $profile = getFirstProfileId($analytics);
        $results = getResults($analytics, $profile, 'organicSearches');
        $rows = $results->getRows();

        $data = array();
        foreach( $rows as $row ) {
        $data[] = array(
            'country'   => $row[0],
            'organicSearches'  => $row[1]
        );
        }

        json_encode( $data );


      return $this->json($data);
    }
    
    
    /**
     * @Route("/admin/ho", name="ho")
     */
    public function ho(ProductRepository $productRepository, PaymentRepository $payment, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {



        function initializeAnalytics()
        {
            // Use the developers console and download your service account
            // credentials in JSON format. Place them in this directory or
            // change the key file location if necessary.
            $KEY_FILE_LOCATION = __DIR__ . '/faidn-283118-7191dd778863.json';

            // Create and configure a new client object.
            $client = new \Google_Client();
            $client->setApplicationName("Hello Analytics Reporting");
            $client->setAuthConfig($KEY_FILE_LOCATION);
            $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly', 'https://www.googleapis.com/auth/analytics']);
            $analytics = new \Google_Service_Analytics($client);
            return $analytics;
        }
    
    
        function getFirstProfileId($analytics) {
            // Get the user's first view (profile) ID.
        
            // Get the list of accounts for the authorized user.
            $accounts = $analytics->management_accounts->listManagementAccounts();
        
            if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();
        
            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                ->listManagementWebproperties($firstAccountId);
        
            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();
        
                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                    ->listManagementProfiles($firstAccountId, $firstPropertyId);
        
                if (count($profiles->getItems()) > 0) {
                $items = $profiles->getItems();
        
                // Return the first view (profile) ID.
                return $items[0]->getId();
        
                } else {
                throw new Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new Exception('No properties found for this user.');
            }
            } else {
            throw new Exception('No accounts found for this user.');
            }
        }
        
        function getResults($analytics, $profileId, $metric) {
            // Calls the Core Reporting API and queries for the number of userAgeBracket
            // for the last seven days.
            return $analytics->data_ga->get(
            'ga:'. $profileId,
            '30daysAgo',
            'today',
            'ga:'.$metric,
                array(
                    'dimensions'  => 'ga:country',
                    'sort'        => '-ga:hits',
                    'max-results' => 10
                )
            );
        }
        
        function printResults($results) {
            // Parses the response from the Core Reporting API and prints
            // the profile name and total hits.
            if (count($results->getRows()) > 0) {
        
            // Get the profile name.
            $profileName = $results->getProfileInfo()->getProfileName();
        
            // Get the entry for the first entry in the first row.
            $rows = $results->getRows();
            $hits = $rows[0][0];
        
            // Print the results.
            print "First view (profile) found: $profileName\n";
            print "Total hits: $hits\n";
            } else {
            print "No results found.\n";
            }
        }

        $analytics = initializeAnalytics();
        $profile = getFirstProfileId($analytics);
        $results = getResults($analytics, $profile, 'hits');
        $rows = $results->getRows();

        $data = array();
        foreach( $rows as $row ) {
        $data[] = array(
            'country'   => $row[0],
            'hits'  => $row[1]
        );
        }

        json_encode( $data );


      return $this->json($data);
    }
    
    /**
     * @Route("/admin/toutes-les-citation", name="citation_admin")
     */
    public function citation_admin(CitationSliderRepository $citationSliderRepository, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $allCitations = $citationSliderRepository->findAllByOrder();


      return $this->render('admin/citation.html.twig', [
        'allCitations' => $allCitations
      ]);
    }
    
    /**
     * @Route("/admin/edition-citation/{id}", name="citation_update_admin")
     */
    public function citation_update_admin($id, CitationSliderRepository $citationSliderRepository, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $citation = $citationSliderRepository->findById($id);

        foreach ($citation as $value) {
            $citationText = $value->getCitation();
            $author = $value->getAuthor();
        }


        if (!empty($_POST)) {
            
            $entityManager = $this->getDoctrine()->getManager();
            $citation = $entityManager->getRepository(CitationSlider::class)->find($id);
            $citation->setCitation($_POST['citation']);
            $citation->setAuthor($_POST['author']);
            $manager->persist($citation);
            $manager->flush();

            return $this->redirectToRoute('citation_admin');
        }
        

      return $this->render('admin/citationUpdate.html.twig', [
        'citation' => $citationText,
        'author' => $author
      ]);
    }
    
    /**
     * @Route("/admin/edition-bas-de-page", name="footer_admin")
     */
    public function footer_admin(FooterDataRepository $footerDataRepository, CitationSliderRepository $citationSliderRepository, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $footerData = $footerDataRepository->findAll();

        $errors = [];

        foreach ($footerData as $value) {
            $instagram = $value->getInstagram();
            $messenger = $value->getMessenger();
            $linkedIn = $value->getLinkedIn();
            $findUs = $value->getFindUs();
            $tel1 = $value->getTel1();
            $tel2 = $value->getTel2();
            $tel3 = $value->getTel3();
            $refPref = $value->getRefPrefecture();
        }


        if (!empty($_POST)) {
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }

            if(!v::notEmpty()->length(3, null)->validate($post['messenger'])){
                $errors[] = 'Votre lien messenger doit contenir au moins 3 caractères';
            }
            if(!v::notEmpty()->length(3, null)->validate($post['instagram'])){
                $errors[] = 'Votre lien instagram doit contenir au moins 3 caractères';
            }
            if(!v::notEmpty()->length(3, null)->validate($post['linkedin'])){
                $errors[] = 'Votre lien linkedIn doit contenir au moins 3 caractères';
            }
            if(!v::notEmpty()->length(7, null)->validate($post['findus'])){
                $errors[] = 'Le siège social doit contenir au moins 7 caractères';
            }
            if(!v::notEmpty()->length(3, null)->validate($post['tel1'])){
                $errors[] = 'Votre 1er téléphone doit contenir au moins 8 caractères';
            }
            if(!v::notEmpty()->length(3, null)->validate($post['tel2'])){
                $errors[] = 'Votre 2ème téléphone doit contenir au moins 8 caractères';
            }
            if(!v::notEmpty()->length(8, null)->validate($post['tel3'])){
                $errors[] = 'Votre 3ème téléphone doit contenir au moins 8 caractères';
            }
            if(!v::notEmpty()->length(15, null)->validate($post['refPref'])){
                $errors[] = 'Votre référence préfecture doit contenir au moins 15 caractères';
            }


            if(count($errors) === 0){

                
                $footerData = $manager->getRepository(FooterData::class)->findAll();
                $footerData[0]->setMessenger($_POST['messenger']);
                $footerData[0]->setInstagram($_POST['instagram']);
                $footerData[0]->setLinkedIn($_POST['linkedin']);
                $footerData[0]->setFindUs($_POST['findus']);
                $footerData[0]->getTel1($_POST['tel1']);
                $footerData[0]->getTel2($_POST['tel2']);
                $footerData[0]->getTel3($_POST['tel3']);
                $footerData[0]->getRefPrefecture($_POST['refPref']);
                
                $manager->persist($footerData[0]);
                $manager->flush();
                $formValid = true;

                return $this->redirectToRoute('footer_admin');
            }else {
                $formValid = false;
            }
        }
        


        
      return $this->render('admin/footerUpdate.html.twig', [
      'instagram' => $instagram,
      'messenger' => $messenger,
      'linkedIn' => $linkedIn,
      'findUs' => $findUs,
      'tel1' => $tel1,
      'tel2' => $tel2,
      'tel3' => $tel3,
      'refPref' => $refPref,
      'errors' => $errors ??null,
      'formValid' => $formValid ??null

      ]);
    }

     /**
     * @Route("/admin/compteur", name="counter_admin")
     */
    public function counter_admin(CounterRepository $counterRepository, CitationSliderRepository $citationSliderRepository, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $counterData = $counterRepository->findAll();
            
        
      return $this->render('admin/counter.html.twig', [
            'counterData' => $counterData,
            'formValid' => $formValid ??null
      ]);
    }
    
    /**
     * @Route("/admin/edition-du-compteur/{id}", name="counter_update_admin")
     */
    public function counter_update_admin($id,CounterRepository $counterRepository, CitationSliderRepository $citationSliderRepository, PostRepository $postRepository, \Swift_Mailer $mailer, EntityManagerInterface $manager)
    {

        $counterData = $counterRepository->findById($id);
        
        foreach ($counterData as $value) {
            $counterValue = $value->getValue();
            $counterContent = $value->getContent();
        }
        $errors = [];

        if (!empty($_POST)) {
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }

            if(!v::notEmpty()->intVal()->validate($post['value'])){
                $errors[] = 'Le format est incorrect. Veuillez entrer un nombre.';
            }
            if(!v::notEmpty()->length(3, 201)->validate($post['content'])){
                $errors[] = 'Votre contenu doit contenir entre 3 et 200 caractères';
            }            

            if(count($errors) === 0){
                $counterDataToSave = $manager->getRepository(Counter::class)->find($id);
                $counterDataToSave->setValue($post['value']);
                $counterDataToSave->setContent($post['content']);
                
                $manager->persist($counterDataToSave);
                $manager->flush();
                $formValid = true;

                return $this->redirectToRoute('counter_admin');
            }else {
                $formValid = false;
            }

        }
        
      return $this->render('admin/counterUpdate.html.twig', [
            'formValid' => $formValid ??null,
            'errors' =>$errors ??null,
            'counterContent' => $counterContent,
            'counterValue' => $counterValue
      ]);
    }



    public function footer(FooterDataRepository $footerDataRepository)
    {


        $footerData = $footerDataRepository->findAll();


        foreach ($footerData as $value) {
            $instagram = $value->getInstagram();
            $messenger = $value->getMessenger();
            $linkedIn = $value->getLinkedIn();
            $findUs = $value->getFindUs();
            $tel1 = $value->getTel1();
            $tel2 = $value->getTel2();
            $tel3 = $value->getTel3();
            $refPref = $value->getRefPrefecture();
        }

    
      return $this->render('partials/_footer.html.twig', [
        'instagram' => $instagram,
        'messenger' => $messenger,
        'linkedIn' => $linkedIn,
        'findUs' => $findUs,
        'tel1' => $tel1,
        'tel2' => $tel2,
        'tel3' => $tel3,
        'refPref' => $refPref,

      ]);
    }

    
    

}

                            