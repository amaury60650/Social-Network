<?php

/*
Types de données en PHP :
Entier ou Integer : 10
Decimal ou Float : 10.43
Tableau ou Array  : ['toto', 13, 10.5, [1, 2, 3]]
Chaine ou String : 'toto'
Object : newPDO();
$db = new PDO(); -> $db est un objet ou une instance de classe PDO.
$db = new PDO('dsn', 'user', 'password'); -> Instance de PDO
$query = $db->query('Requete'); -> Instance de PDOStatement
$query->fetchAll(); -> Renvoie un tableau
*/


// Le nom d'une classe commence toujours pas une majuscule
class Voiture {
    var $nb_roues; // $nb_roues est un attribut de la classe Voiture
    var $couleur;
    var $modele;

    // Le constructeur est la fonction qui est appelé à chaque fois que la classe voiture est instanciée.
    function __construct($modele) {
        // var_dump($this);
        $this->modele = $modele;
        $this->nb_roues = 4; // Reviens à écrire $renault->nb_roues = 4
    }
    function roule() {
        return 'Ma voiture roule';
    }
    function klaxone() {
        return 'Ma voiture klaxone';
    }
}

$renault = new Voiture('Megane'); // Voiture est une classe et $renault est une instance de classe Voiture.
var_dump($renault);
$renault->nb_roues = 4; // On modifie l'attribut nb_roues de $renault
var_dump($renault);
$renault->couleur = "rouge";
// var_dump($renault);
echo 'Ma voiture est ' . $renault->couleur . ' et elle a ' . $renault->nb_roues . ' roues ';
echo $renault->roule(); // Affiche 'Ma voiture roule'

$peugeot = new Voiture('206');
var_dump($peugeot);
 ?>
