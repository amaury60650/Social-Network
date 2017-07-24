<?php

/*
 Créer une classe Animal.
 Un animal à un nom, nombre de pattes, une couleur et un type.
 Un animal peut crier et marcher.
*/

class Animal {
    var $nom;
    var $pattes;
    var $couleur;
    var $type;
    function __construct($nom, $type) {
        $this->nom = $nom;
        $this->type = $type;
        $this->pattes = 4;
    }
    function crier() {
        return $this->nom .' crie ';
    }
    function marcher() {
        return $this->nom .' marche';
    }
}

$tigre = new Animal('Bobby', 'Felin');
$tigre->couleur = "Blanc";



$chat = new Animal('Nala', 'Felin');
$chat->couleur = "Noire et blanc";


var_dump($tigre);
var_dump($chat);

echo 'Mon animal s\'apelle ' . $tigre->nom . ' et c\'est un  ' . $tigre->type . ' de couleur ' . $tigre->couleur . ' ';
echo $chat->crier();
echo $tigre->marcher();
?>
<br>
<?php

echo 'Mon animal s\'apelle ' . $chat->nom . ' et c\'est un  ' . $chat->type . ' de couleur ' . $chat->couleur;
