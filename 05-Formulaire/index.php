<?php

require_once 'Formulaire.class.php';

$formulaire = new Formulaire(); // J'instancie la classe Formulaire. Quand $formulaire est instancié, il posséde un tableau $champs qui est vide.
$formulaire->input('nom')
           ->input('prenom')
           ->input('sujet')
           ->input('telephone')
           ->input('message');
echo $formulaire->display(); // Afficher mon formulaire en HTML
echo $formulaire->getDonnees('nom');
echo $formulaire->getDonnees('prenom').'<br />';
echo $formulaire->getDonnees('sujet').'<br />';
var_dump($formulaire);