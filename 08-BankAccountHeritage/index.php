<?php

class Account {
    public $numero_compte;
    public $montant = 0;
    public function __construct() {
        $this->numero_compte = uniqid();
    }
    public function crediter($montant) {
        $this->montant += $montant;
        return $this;
    }
    public function debiter($montant) {
        $this->montant -= $montant;
        return $this;
    }
    public function getAmount() {
        return $this->montant;
    }
}
// Représente le compte courant qui hérite du compte
class CurrentAccount extends Account {
    private $fees_attribut; // Frais
    public function __construct($fees_argument) {
        parent::__construct(); // On appelle le constructeur de Account sinon il est écrasé
        $this->fees_attribut = $fees_argument;
    }
    public function applyFees() {
        $this->montant -= $this->fees_attribut; // Je retire les frais du montant pour l'instance actuelle. Exemple si le montant est à 1000 et les frais à 10 on fait 1000 = 1000 - 10
    }
}
// Représente le livret qui hérite du compte
class Booklet extends Account {
    private $interest_rate; // Taux d'intérêt
    public function __construct($interest_rate) {
        $this->interest_rate = $interest_rate;
    }
    public function getInterest() {
        $this->montant += $this->montant * $this->interest_rate / 100;
    }
}

$cc = new CurrentAccount(10); // Dans le constructeur, on passe les frais du compte courant.
$cc->crediter(1000);
var_dump($cc);
$cc->applyFees(); // Prélever les frais du compte courant
echo $cc->getAmount(); // Affiche 990

$bookletA = new Booklet(0.75); // Dans le constructeur, on passe le taux d'intérêt du livret.
$bookletA->crediter(50);
$bookletA->getInterest();
echo $bookletA->getAmount(); // Affiche 50.375