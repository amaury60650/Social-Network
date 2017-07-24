<?php

// On fait un autoload de toutes nos classes PHP
spl_autoload_register(function ($class) {
    require_once '../src/' . $class . '.php';
});

$user = new \Webforce\User();
$form = new \Webforce\Form();

$app = new \Webforce\Application();

//$app->addCSS('style.css');

$app->title = 'Projet 35';

$app->run(); // Je lance mon site, ou plus simplement j'affiche de l'HTML