<?php

/*
Autoload de classes. Pour charger nos classes uniquement quand on les utilise, on peut utiliser la fonction spl_autoload_register() plutôt que d'écrire 
require_once 'A.php';
require_once 'B.php';
require_once 'C.php';
require_once 'D.php';
require_once 'E.php';
*/

spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
    var_dump('Inclus le fichier ' . $class);
});

$a = new A();
var_dump($a);

$e = new E();
var_dump($e);