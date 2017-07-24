<?php

class Character {
    private $name;
    private $health = 100; // On définit la santé à 100 par défaut
    private $strength = 20;
    private $experience = 0;
    public function __construct($name) {
        $this->name = $name;
    }
    public function walk() {
        return $this->name . ' marche.';
    }
    public function attack(Character $target) { // On peut "typer" l'argument target pour forcer l'utilisation d'un objet Character
        $target->health -= $this->strength * (rand(25, 100) / 100); // On retire entre 5 et 20 de vie au personnage cible
        $this->experience++; // On augmente l'expérience du personnage qui attaque, de 1.
        if ($target->health <= 0) { // Si la santé de la cible tombe à zéro, on arrête le script
            echo $target->name . ' est mort.';
            return;
        }
        var_dump($target);
    }
}

$player1 = new Character('Jon Snow');
$player2 = new Character('Tywin Lanister');
echo $player1->walk(); // Affiche Jon Snow marche.
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
echo $player1->attack($player2);
var_dump($player1);