<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'addarticle' => [[], ['_controller' => 'App\\Controller\\AddArticleController::addArticle'], [], [['text', '/addarticle']], [], [], []],
    'delete_article' => [['id'], ['_controller' => 'App\\Controller\\DeleteArticleController::deleteArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'editarticle_view' => [['id'], ['_controller' => 'App\\Controller\\EditArticlesController::editArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editarticle']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\IndexController::list'], [], [['text', '/']], [], [], []],
    'article_view' => [['id'], ['_controller' => 'App\\Controller\\ViewController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
