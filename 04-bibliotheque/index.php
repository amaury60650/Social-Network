<?php


/*
1- Créer une classe livre. La classe Livre possède un attribut nom. Elle possède aussi une méthode _construct qui définit le nom du livre.
2- Créer une classe bibliotheque. La bibliotheque possède une méthode ajouterLivre() qui a un argument $livre. On aura aussi un attributs livres qui sera un tableau vide.
A chaque fois qu'on appelle la méthode ajouteRLivre, on ajoute son argument dans le tableau.
*/

class Livre{
    public $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
}
class Bibliotheque{
    public $livre = [];
    public function ajouterLivre($livre){
        array_push($this->livre, $livre);
        return $this;
    }
}

$livre1 = new Livre('Livre 1');
$livre2 = new Livre('Livre 2');
$livre3 = new Livre('Livre 3');


$bibliotheque1 = new Bibliotheque();
$bibliotheque1->ajouterLivre($livre1)
              ->ajouterLivre($livre2)
              ->ajouterLivre($livre3);

var_dump($livre1);
var_dump($bibliotheque1);
