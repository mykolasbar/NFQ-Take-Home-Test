<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/addarticle' => [[['_route' => 'addarticle', '_controller' => 'App\\Controller\\AddArticleController::addArticle'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/delete/([^/]++)(*:23)'
                .'|/editarticle/([^/]++)(*:51)'
                .'|/article/([^/]++)(*:75)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:110)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'delete_article', '_controller' => 'App\\Controller\\DeleteArticleController::deleteArticle'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        51 => [[['_route' => 'editarticle_view', '_controller' => 'App\\Controller\\EditArticlesController::editArticle'], ['id'], null, null, false, true, null]],
        75 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        110 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
