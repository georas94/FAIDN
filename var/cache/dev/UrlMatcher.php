<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/mon-compte' => [[['_route' => 'account_home', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
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
        '/admin/toutes-les-citation' => [[['_route' => 'citation_admin', '_controller' => 'App\\Controller\\AdminController::citation_admin'], null, null, null, false, false, null]],
        '/admin/edition-bas-de-page' => [[['_route' => 'footer_admin', '_controller' => 'App\\Controller\\AdminController::footer_admin'], null, null, null, false, false, null]],
        '/admin/compteur' => [[['_route' => 'counter_admin', '_controller' => 'App\\Controller\\AdminController::counter_admin'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart_home', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact_home', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/donate' => [[['_route' => 'donate_home', '_controller' => 'App\\Controller\\DonateController::index'], null, null, null, false, false, null]],
        '/evenements' => [[['_route' => 'events_home', '_controller' => 'App\\Controller\\EventsController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/adhesion' => [[['_route' => 'member_home', '_controller' => 'App\\Controller\\MemberController::index'], null, null, null, false, false, null]],
        '/missions' => [[['_route' => 'missions_home', '_controller' => 'App\\Controller\\MissionsController::index'], null, null, null, false, false, null]],
        '/partenaires' => [[['_route' => 'partners_home', '_controller' => 'App\\Controller\\PartnersController::index'], null, null, null, false, false, null]],
        '/nos-projets' => [[['_route' => 'projects_home', '_controller' => 'App\\Controller\\ProjectsController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie/verification-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/adherant' => [[['_route' => 'security_member', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'security_payment', '_controller' => 'App\\Controller\\SecurityController::payment'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/ad(?'
                    .'|min/(?'
                        .'|m(?'
                            .'|ettre\\-a\\-jour\\-partenaire/([^/]++)(*:221)'
                            .'|odifi(?'
                                .'|er\\-article/([^/]++)(*:257)'
                                .'|cation\\-produit/([^/]++)(*:289)'
                            .')'
                        .')'
                        .'|supprimer\\-article/([^/]++)(*:326)'
                        .'|edition\\-(?'
                            .'|citation/([^/]++)(*:363)'
                            .'|du\\-compteur/([^/]++)(*:392)'
                        .')'
                    .')'
                    .'|hesion/add/([^/]++)(*:421)'
                    .'|dCart/([^/]++)(*:443)'
                .')'
                .'|/panier/remove/([^/]++)(*:475)'
                .'|/e(?'
                    .'|venements/([^/]++)(*:506)'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:550)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:593)'
                .')'
                .'|/m(?'
                    .'|issions/([^/]++)(*:623)'
                    .'|ot\\-de\\-passe\\-oublie/reset(?:/([^/]++))?(*:672)'
                .')'
                .'|/nos\\-projets/([^/]++)(*:703)'
                .'|/security/addDonate/([^/]++)(*:739)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'partners_update_admin', '_controller' => 'App\\Controller\\AdminController::partners_update_admin'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'article_update_admin', '_controller' => 'App\\Controller\\AdminController::article_update_admin'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'product_update_admin', '_controller' => 'App\\Controller\\AdminController::product_update'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'delete_article_admin', '_controller' => 'App\\Controller\\AdminController::delete_article_admin'], ['id'], null, null, false, true, null]],
        363 => [[['_route' => 'citation_update_admin', '_controller' => 'App\\Controller\\AdminController::citation_update_admin'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => 'counter_update_admin', '_controller' => 'App\\Controller\\AdminController::counter_update_admin'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'security_addCart', '_controller' => 'App\\Controller\\SecurityController::addCart'], ['info'], null, null, false, true, null]],
        475 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        506 => [[['_route' => 'events_articles', '_controller' => 'App\\Controller\\EventsController::articles'], ['article'], null, null, false, true, null]],
        550 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        593 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        623 => [[['_route' => 'missions_articles', '_controller' => 'App\\Controller\\MissionsController::missionArticles'], ['category'], null, null, false, true, null]],
        672 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        703 => [[['_route' => 'projects_articles', '_controller' => 'App\\Controller\\ProjectsController::articles'], ['article'], null, null, false, true, null]],
        739 => [
            [['_route' => 'security_addDonate', '_controller' => 'App\\Controller\\SecurityController::addDonate'], ['info'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
