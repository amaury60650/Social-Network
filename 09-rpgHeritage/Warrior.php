<?php

class Warrior extends Character {
    public function __construct($name) {
        parent::__construct($name); // On appelle la fonction __construct de la classe Character sans oublier l'argument $name;
        $this->strength *= 10; // On passe la force du guerrier à 20
    }
}