<?php

/*
Les propriétés et méthodes d'une classe ont une visibilité. Par défault, elle est à public.
public: La propriété ou la méthode est visible à l'intérieur ou à l'extérieur ou à l'extérieur de la classe.
private: La propriété ou la méthode n'est visible qu'a l'intérieur de la classe.
protected: La propriété ou la méthode n'est visible qu'a l'intérieur de la classe et depuis ses classes filles.
*/

class Personnage {
    var $nom;
    private $vie;
    public function __construct(){
        $this->vie = 100;
    }
    public function setNom($nom){
        if (strlen($nom) < 2) {
            throw new Exception('Le nom du personnage doit avoir au moins 2 caractères');
        }
        $this->nom = $nom;
    }
    public function getNom(){
        return strtoupper($this->nom);
    }
}


$joueur = new Personnage();
// $joueur->nom = 'Amaury';
// var_dump($joueur);
$joueur->SetNom('Amaury');
echo $joueur->getNom();
// $joueur->vie = 100; // L'attribut vie est en private on ne peut pas le modifier en dehors de la classe

var_dump($joueur);
