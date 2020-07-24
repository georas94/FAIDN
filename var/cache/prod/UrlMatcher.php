<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/get-google-analytics-data' => [[['_route' => 'analytics', '_controller' => 'App\\Controller\\AdminController::google'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/gestion-des-articles' => [[['_route' => 'view_all_articles_admin', '_controller' => 'App\\Controller\\AdminController::view_all_articles_admin'], null, null, null, false, false, null]],
        '/admin/tous-les-utilisateurs' => [[['_route' => 'all_users_admin', '_controller' => 'App\\Controller\\AdminController::all_users_admin'], null, null, null, false, false, null]],
        '/admin/ajouter-des-partenaires' => [[['_route' => 'partners_add_admin', '_controller' => 'App\\Controller\\AdminController::partners_add_admin'], null, null, null, false, false, null]],
        '/admin/creer-article' => [[['_route' => 'article_add_admin', '_controller' => 'App\\Controller\\AdminController::article_add_admin'], null, null, null, false, false, null]],
        '/admin/messages' => [[['_route' => 'messages_view', '_controller' => 'App\\Controller\\AdminController::messages_view'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'sales_home_admin', '_controller' => 'App\\Controller\\AdminController::sales_home_admin'], null, null, null, false, false, null]],
        '/admin/gestion-des-produits' => [[['_route' => 'product_management_view', '_controller' => 'App\\Controller\\AdminController::product_management_view'], null, null, null, false, false, null]],
        '/admin/envoyer-adhesion' => [[['_route' => 'product_send_admin', '_controller' => 'App\\Controller\\AdminController::product_send_admin'], null, null, null, false, false, null]],
        '/admin/archives' => [[['_route' => 'archives_admin', '_controller' => 'App\\Controller\\AdminController::archives_admin'], null, null, null, false, false, null]],
        '/admin/organic-searches' => [[['_route' => 'organic_searches_admin', '_controller' => 'App\\Controller\\AdminController::organic_searches_admin'], null, null, null, false, false, null]],
        '/admin/ho' => [[['_route' => 'ho', '_controller' => 'App\\Controller\\AdminController::ho'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart_home', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_home', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/donate' => [[['_route' => 'donate_home', '_controller' => 'App\\Controller\\DonateController::index'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'events_home', '_controller' => 'App\\Controller\\EventsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/adhesion' => [[['_route' => 'member_home', '_controller' => 'App\\Controller\\MemberController::index'], null, null, null, false, false, null]],
        '/missions' => [[['_route' => 'missions_home', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/partenaires' => [[['_route' => 'partners_home', '_controller' => 'App\\Controller\\PartnersController::index'], null, null, null, false, false, null]],
        '/nos-projets' => [[['_route' => 'projects_home', '_controller' => 'App\\Controller\\ProjectsController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/adherant' => [[['_route' => 'security_member', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'security_payment', '_controller' => 'App\\Controller\\SecurityController::payment'], null, null, null, false, false, null]],
        '/paiement-mobile-money' => [[['_route' => 'payment_mobile_money_security', '_controller' => 'App\\Controller\\SecurityController::payment_mobile_money_security'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad(?'
                    .'|min/(?'
                        .'|m(?'
                            .'|ettre\\-a\\-jour\\-partenaire/([^/]++)(*:59)'
                            .'|odifi(?'
                                .'|er\\-article/([^/]++)(*:94)'
                                .'|cation\\-produit/([^/]++)(*:125)'
                            .')'
                        .')'
                        .'|supprimer\\-article/([^/]++)(*:162)'
                    .')'
                    .'|hesion/add/([^/]++)(*:190)'
                    .'|dCart/([^/]++)(*:212)'
                .')'
                .'|/panier/remove/([^/]++)(*:244)'
                .'|/e(?'
                    .'|venements/([^/]++)(*:275)'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:319)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:362)'
                .')'
                .'|/missions/([^/]++)(*:389)'
                .'|/nos\\-projets/([^/]++)(*:419)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        59 => [[['_route' => 'partners_update_admin', '_controller' => 'App\\Controller\\AdminController::partners_update_admin'], ['id'], null, null, false, true, null]],
        94 => [[['_route' => 'article_update_admin', '_controller' => 'App\\Controller\\AdminController::article_update_admin'], ['id'], null, null, false, true, null]],
        125 => [[['_route' => 'product_update_admin', '_controller' => 'App\\Controller\\AdminController::product_update'], ['id'], null, null, false, true, null]],
        162 => [[['_route' => 'delete_article_admin', '_controller' => 'App\\Controller\\AdminController::delete_article_admin'], ['id'], null, null, false, true, null]],
        190 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'security_addCart', '_controller' => 'App\\Controller\\SecurityController::addCart'], ['info'], null, null, false, true, null]],
        244 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'events_articles', '_controller' => 'App\\Controller\\EventsController::articles'], ['article'], null, null, false, true, null]],
        319 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        362 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        389 => [[['_route' => 'missions_articles', '_controller' => 'App\\Controller\\MissionsController::missionArticles'], ['category'], null, null, false, true, null]],
        419 => [
            [['_route' => 'projects_articles', '_controller' => 'App\\Controller\\ProjectsController::articles'], ['article'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
