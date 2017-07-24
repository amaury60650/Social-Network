<?php

// J'inclus l'autoload de classe de Composer. J'ai accès à AltoRouter et App.
require 'vendor/autoload.php';

// J'instancie la classe Webforce\App qui me permet de configurer les routes de mon application et d'afficher la bonne page
$app = new Webforce\App();

// Je définis toutes les routes de mon site
$app->addRoutes([
    ['GET', '/', 'IndexController#index', 'homepage'],
    ['GET', '/contact', 'IndexController#contact', 'contact'],
    ['GET', '/about', 'IndexController#about', 'about'],
    ['GET', '/users', 'UserController#all', 'user_list'],
    ['GET', '/users/create', 'UserController#create', 'user_create'],
    ['GET', '/users/[i:id]', 'UserController#view', 'user_view'],
    ['GET', '/upload', 'UploadController#index', 'upload']
]);

// On lance le site et l'app va se charger d'appeller la bonne méthode
$app->run();