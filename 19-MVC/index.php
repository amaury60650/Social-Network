<?php
include 'PersonnModel.php';
include 'view.php';
include 'PersonnController.php'; // Le controlleur pour les personnes

// On instancie un controlleur pour gérer les actions sur les personnes
$personnController = new PersonnController();
// On peut détecter la page que l'utilisateur visite grâce au paramètre $_GET
if ($_GET['action'] == 'view') {
    echo $personnController->view();
} else if ($_GET['action'] == 'edit') {
    echo $personnController->edit();
}
