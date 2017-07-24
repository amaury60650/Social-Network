<?php

/*
Composer :
Gestionnaire de dépendances, paquets et librairies (Open source) en PHP.
Permet d'éviter de télécharger les librairies manuellement.

Installation sur Windows : setup.exec

Installation sur mac ou Linux :
Dans le terminal :

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/


Utilisation de composer :
Pour vérifier qu'il est bien installé
composer --version

Pour initaliser un projet avec composer, on se déplace dans le projet :
cd C:\xampp\htdocs\POO4\24-composer -> Windows
cd /Applications/Mampp.app/htdocs/POO4/24-composer -> macOS

Dans le projet on peut initialiser le fichier composer.json :
composer init

On peut chercher un paquet
composer search var-dumper

On peut installer un paquet et l'ajouter en dépendances dans notre fichier json
composer require symfony/var-dumper

*/

require 'vendor/autoload.php';

$tableau = [
    'Une chaine',
    12,
    [
        'nom' => 'toto'
    ]
];
dump($tableau); // dump est une fonction qui existe dans le composant var-dumper de symfony