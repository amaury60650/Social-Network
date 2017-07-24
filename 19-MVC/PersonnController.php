<?php

class PersonnController {
    public function view() {
        $personnModel = new PersonnModel();
        $personn = $personnModel->find(1); // Va chercher l'utilisateur dans ma BDD 
        // include 'views/view_personn.phtml';
        $view = new View();
        $view->setData([
            'title' => 'Voir une personne',
            'personn' => $personn
        ]);
        return $view->renderHTML();
    }
    public function edit() {
        return 'On édite une personne';
    }
}
