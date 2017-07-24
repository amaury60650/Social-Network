<?php

class Character {
    protected $name;
    protected $health = 100;
    protected $strength = 10;
    protected $mana = 10;
    public function __construct($name) {
        $this->name = $name;
    }
    public function attack($target) {
        $target->health -= $this->strength * (rand(20, 100) / 100); // On retire aléatoirement entre 2 et 10 de vie au personnage cible
    }
}