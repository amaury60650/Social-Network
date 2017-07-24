<?php

require_once 'Character.php'; // Le fichier ne contient que la définition de la classe
require_once 'Warrior.php';
require_once 'Wizard.php';

$warrior = new Warrior('Thor');
$wizard = new Wizard('Loki');

var_dump($warrior);
var_dump($wizard);

$warrior->attack($wizard); // Le guerrier attaque le sorcier
$wizard->attack($warrior); // Le sorcier attaque le guerrier

var_dump($warrior);
var_dump($wizard);

$wizard->cast($warrior); // Le sorcier lance un sort au guerrier
$wizard->heal(); // Le sorcier se soigne

var_dump($warrior);
var_dump($wizard);
