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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/tweet/create' => [[['_route' => 'create_tweet', '_controller' => 'App\\Controller\\HomeController::createTweet'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register/step-one' => [[['_route' => 'registration_step_one', '_controller' => 'App\\Controller\\SecurityController::stepOne'], null, null, null, false, false, null]],
        '/register/step-two' => [[['_route' => 'registration_step_two', '_controller' => 'App\\Controller\\SecurityController::stepTwo'], null, null, null, false, false, null]],
        '/register/confirmation' => [[['_route' => 'registration_confirmation', '_controller' => 'App\\Controller\\SecurityController::confirmation'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'main_profile', '_controller' => 'App\\Controller\\UserController::mainProfile'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\HomeController::searchUsers'], null, null, null, false, false, null]],
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
                .'|/tweet/(?'
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|like(*:198)'
                            .'|unlike(*:212)'
                        .')'
                        .'|(*:221)'
                    .')'
                    .'|(\\d+)/like(*:240)'
                    .'|(\\d+)/unlike(*:260)'
                    .'|(\\d+)(*:273)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|/(?'
                        .'|toggle\\-friend(*:317)'
                        .'|edit(*:329)'
                        .'|add\\-friend(*:348)'
                    .')'
                    .'|(*:357)'
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
        198 => [[['_route' => 'tweet_like', '_controller' => 'App\\Controller\\TweetController::likeTweet'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'tweet_unlike', '_controller' => 'App\\Controller\\TweetController::unlikeTweet'], ['id'], null, null, false, false, null]],
        221 => [[['_route' => 'app_tweet', '_controller' => 'App\\Controller\\TweetController::one'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'like_tweet', '_controller' => 'App\\Controller\\TweetController::likeTweet'], ['id'], null, null, false, false, null]],
        260 => [[['_route' => 'unlike_tweet', '_controller' => 'App\\Controller\\TweetController::unlikeTweet'], ['id'], null, null, false, false, null]],
        273 => [[['_route' => 'tweet_show', '_controller' => 'App\\Controller\\YourControllerName::show'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'toggle_friend', '_controller' => 'App\\Controller\\UserController::toggleFriend'], ['id'], null, null, false, false, null]],
        329 => [[['_route' => 'edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        348 => [[['_route' => 'add_friend', '_controller' => 'App\\Controller\\UserController::addFriend'], ['id'], null, null, false, false, null]],
        357 => [
            [['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::userProfile'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
