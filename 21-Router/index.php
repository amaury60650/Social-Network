<?php

require 'vendor/autoload.php';
// J'instancie AltoRouter dans un objet $router
$router = new AltoRouter();
$router->setBasePath('/POO4/21-Router'); // Mon projet est dans un sous dossier.

// Je crée une route / qui correspond à une fonction anonyme
$router->map('GET', '/', function () {
    echo 'Je suis sur la page accueil';
}, 'accueil');

// Je crée une route /contact qui correspond à une fonction anonyme
$router->map('GET', '/contact', function () {
    echo 'Je suis sur la page contact';
}, 'contact');

// Crée une nouvelle route /hello/toto qui affiche toto
// toto doit être un paramètre dynamique
// On doit afficher toto sur la page

$router->map('GET', '/hello/[a:chaine]', function ($chaine) {
    echo 'Hello ' . $chaine;
}, 'hello');

$match = $router->match();
var_dump($match);

if ($match) {
    // Si on est sur la page contact, on appelle la fonction qui affiche "Je suis sur la page contact"
    call_user_func_array($match['target'], $match['params']);
}

function addition ($a, $b) {
    return $a + $b;
}

echo addition(10, 3); // 13
echo call_user_func_array('addition', [10, 3]); // affiche 13. Comme addition(10, 3)
echo call_user_func_array(function ($a, $b) { return $a + $b; }, [10, 3]); // affiche 13
