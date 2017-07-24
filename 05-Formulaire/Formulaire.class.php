<?php

class Formulaire {
    /**
     * @var array
     * Stocke tous les champs du formulaire
     */
    var $champs = [];
    /**
     * @var array
     * Stocke toutes les données du formulaire quand il est posté
     */
    var $donnees = [];
    /**
     * A chaque instance d'un formulaire, on récupére les données du formulaire dans la superglobale $_POST.
    */
    public function __construct() {
        $this->donnees = $_POST;
    }
    /**
     * @param string $nom Définir le nom du champ à ajouter (name + label)
     * @return Formulaire $this
    */
    public function input($nom) {
        array_push($this->champs, '<label>'.ucfirst($nom).' : </label><input name="'.$nom.'" type="text"><br />'); // $this->champs[] = '<input type="text">';
        return $this;
    }
    /**
     * @param string $cle Définir la clé à récupérer dans l'attribut $donnees
     * @return string|null
    */
    public function getDonnees($cle) {
        return isset($this->donnees[$cle]) ? $cle . ':' . $this->donnees[$cle] : null;
    }
    /**
     * Permet d'afficher le formulaire en HTML
     *
     * @return string $html
     */
    public function display() {
        $html = '<form method="POST">';
        // On parcourt tous les champs dans l'attribut $champs
        foreach ($this->champs as $champ) {
            $html .= $champ;
        }
        $html .= '<button>Envoyer</button>';
        $html .= '</form>';
        return $html;
    }
}