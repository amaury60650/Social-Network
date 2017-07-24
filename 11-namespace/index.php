<?php

namespace Tools; // On crée un namespace (espace de nom) ou dossier virtuel qui s'appelle Tools et on se déplace dedans (dans \Tools)

// Toutes les classes écrites après le namespace seront rangées dans ce dossier
class Text {
    private $string;
}

$text = new Text(); // ou \Tools\Text() en lien absolu
var_dump($text);
//$db = new \PDO('dsn', 'user', 'mdp'); // Si je veux utiliser la classe PDO qui se situe dans le namespace global, on doit préfixer leur nom avec un anti slash

namespace Fields\Input; // On peut faire des sous dossiers dans les namespaces

class Text {
    private $value;
}

$text = new Text(); // ou \Fields\Input\Text() en lien absolu
var_dump($text);


use \Fields\Input\Text as TextField; // Je crée un raccourci new TextField() est comme new \Fields\Input\Text()
use \Tools\Text as TextTool; // Je crée un raccourci new TextField() est comme new \Fields\Input\Text()

$textField = new TextField(); // ou \Fields\Input\Text
$textTool = new TextTool();// ou \Tools\Text

var_dump($textField);
var_dump($textTool);