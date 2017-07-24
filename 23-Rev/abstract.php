<?php
// Le mot clé abstract permet d'empêcher l'instanciation de la classe
abstract class Humain
{
    // Une méthode abstract oblige les classes héritant de la classe Humain à créer la méthode respirer
    abstract public function respirer();
}

class Homme extends Humain
{
    public function respirer()
    {

    }
}

class Femme extends Humain
{
    public function respirer()
    {

    }
}

$pierre = new Homme();
$marie = new Femme();
$jean = new Homme();

var_dump($pierre);
var_dump($marie);
var_dump($jean);