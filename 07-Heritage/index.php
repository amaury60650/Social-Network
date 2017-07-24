<?php

class Animal {
    protected $nb_paws = 4; // protected est identique à private, il est utilisable uniquement dans la classe mais aussi dans les classes qui héritent
    public function cry() {
        return 'Rrrrrr';
    }
}
// La classe Cat hérite de la classe Animal
class Cat extends Animal {
    public function cry() { // Cette méthode écrase celle d'Animal
        return parent::cry() . ' Miaou'; // On peut appeler la méthode située dans la classe parente
    }
}
// La classe Dog hérite de la classe Animal
class Dog extends Animal {
    public function cry() { // Cette méthode écrase celle d'Animal
        return 'Woaf';
    }
}

class Bird extends Animal {
    protected $nb_paws = 2;
}

$cat = new Cat();
$dog = new Dog();
$bird = new Bird();
echo $cat->cry(); // La méthode cry existe dans la classe Cat
var_dump($cat);
echo $dog->cry(); // La méthode cry existe dans la classe Dog
var_dump($dog);
echo $bird->cry(); // La méthode cry existe dans la classe Dog
var_dump($bird);