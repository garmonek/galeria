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
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/wallpaper' => [[['_route' => 'wallpaper_index', '_controller' => 'App\\Controller\\WallpaperController::index'], null, ['GET' => 0], null, true, false, null]],
        '/wallpaper/create' => [[['_route' => 'wallpaper_create', '_controller' => 'App\\Controller\\WallpaperController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/edit/([^/]++)(*:189)'
                .'|/category/(?'
                    .'|([1-9]\\d*)(*:220)'
                    .'|([1-9]\\d*)/edit(*:243)'
                    .'|([1-9]\\d*)/delete(*:268)'
                .')'
                .'|/wallpaper/(?'
                    .'|([1-9]\\d*)(*:301)'
                    .'|([1-9]\\d*)/edit(*:324)'
                    .'|([1-9]\\d*)/delete(*:349)'
                    .'|([^/]++)/comment(*:373)'
                    .'|([1-9]\\d*)/comment/delete(*:406)'
                .')'
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
        189 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, true, null]],
        220 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        243 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        268 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        301 => [[['_route' => 'wallpaper_show', '_controller' => 'App\\Controller\\WallpaperController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'wallpaper_edit', '_controller' => 'App\\Controller\\WallpaperController::edit'], ['id'], ['GET' => 0, 'PUT' => 1], null, false, false, null]],
        349 => [[['_route' => 'wallpaper_delete', '_controller' => 'App\\Controller\\WallpaperController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        373 => [[['_route' => 'wallpaper_comment', '_controller' => 'App\\Controller\\WallpaperController::comment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [
            [['_route' => 'wallpaper_comment_delete', '_controller' => 'App\\Controller\\WallpaperController::commentdelete'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
