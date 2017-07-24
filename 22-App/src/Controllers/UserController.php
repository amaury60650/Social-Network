<?php

namespace Webforce\Controllers;

use Webforce\Models\UserModel;

class UserController
{
    /**
     * Méthode pour afficher un utilisateur en particulier.
     */
    public function view($id)
    {
        $userModel = new UserModel();
        var_dump($userModel);
        echo 'Page de utilisateur ' . $id;
    }
    /**
     * Méthode pour afficher tous les utilisateurs.
     */
    public function all()
    {
        echo 'Tous les utilisateurs';
    }
    /**
     * Méthode qui permet de créer un utilisateur
     */
    public function create()
    {
        echo 'Créer un utilisateur avec un formulaire';
    }
}