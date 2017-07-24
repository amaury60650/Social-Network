<?php

class Account {
    public $montant = 0;
    public $numero_compte;

    public function __construct() {
        $this->numero_compte = uniqid();
    }


    public function getAmount(){
        return $this->montant;
    }
    public function crediter($montant){
        return $this->montant += $montant;
    }
    public function debiter($montant){
        return $this->montant -= $montant;
    }
}

$account1 = new Account(); // On peut créer un nouveau compte. Par défaut, un compte aura un montant de 0 et un numéro de compte
echo $account1->getAmount(); // Affiche 0
var_dump($account1);
$account1->crediter(1000); // Le montant du compte passe de 0 à 1000
echo $account1->getAmount(); // Affiche 1000
$account1->debiter(500); // Le montant du compte passe de 1000 à 500
$account1->debiter(200); // Le montant du compte passe de 500 à 300
echo $account1->getAmount(); // Affiche 300
