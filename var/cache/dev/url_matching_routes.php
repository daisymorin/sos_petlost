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
        '/admin/actuality' => [[['_route' => 'actuality_index', '_controller' => 'App\\Controller\\Admin\\ActualityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/actuality/new' => [[['_route' => 'actuality_new', '_controller' => 'App\\Controller\\Admin\\ActualityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/animals' => [[['_route' => 'animals_index', '_controller' => 'App\\Controller\\AnimalsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/animals/new' => [[['_route' => 'animals_new', '_controller' => 'App\\Controller\\AnimalsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/animaux-disparus' => [[['_route' => 'animaux-disparus', '_controller' => 'App\\Controller\\DefaultController::animalMissing'], null, null, null, false, false, null]],
        '/animaux-trouve' => [[['_route' => 'animaux-trouve', '_controller' => 'App\\Controller\\DefaultController::animalFound'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/annonce' => [[['_route' => 'annonces', '_controller' => 'App\\Controller\\User\\UserController::index'], null, null, null, true, false, null]],
        '/user/annonce/new-annonce' => [[['_route' => 'new_annonce', '_controller' => 'App\\Controller\\User\\UserController::newAnnonce'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/a(?'
                    .'|ctuality/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|nimals/([^/]++)(?'
                        .'|(*:248)'
                        .'|/edit(*:261)'
                        .'|(*:269)'
                    .')'
                .')'
                .'|/perdu/([^/]++)(*:294)'
                .'|/trouve/([^/]++)(*:318)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:362)'
                .'|/user/annonce/annonce/([^/]++)(?'
                    .'|(*:403)'
                    .'|/edit(*:416)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'actuality_show', '_controller' => 'App\\Controller\\Admin\\ActualityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'actuality_edit', '_controller' => 'App\\Controller\\Admin\\ActualityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'actuality_delete', '_controller' => 'App\\Controller\\Admin\\ActualityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        248 => [[['_route' => 'animals_show', '_controller' => 'App\\Controller\\AnimalsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        261 => [[['_route' => 'animals_edit', '_controller' => 'App\\Controller\\AnimalsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'animals_delete', '_controller' => 'App\\Controller\\AnimalsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        294 => [[['_route' => 'showPerdu', '_controller' => 'App\\Controller\\DefaultController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        318 => [[['_route' => 'showTrouve', '_controller' => 'App\\Controller\\DefaultController::showTrouve'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        403 => [[['_route' => 'show-annonce', '_controller' => 'App\\Controller\\User\\UserController::showAnnonceUser'], ['id'], ['GET' => 0], null, false, true, null]],
        416 => [
            [['_route' => 'edit-annonce', '_controller' => 'App\\Controller\\User\\UserController::editAnnonceUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
