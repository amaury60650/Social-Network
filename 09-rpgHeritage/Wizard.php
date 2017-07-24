<?php

class Wizard extends Character {
    public function __construct($name) {
        parent::__construct($name); // On appelle la fonction __construct de la classe Character sans oublier l'argument $name;
        $this->mana *= 2; // On passe le mana du sorcier à 20
    }
    public function cast($target) {
        $target->health = 0; // La cible meurt
    }
    public function heal() {
        $this->health = 100;
    }
}