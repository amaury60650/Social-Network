<?php

namespace Webforce;

class App
{
    private $router;
    public function __construct()
    {
        // J'instancie la classe AltoRouter directement dans App (dans un attribut router)
        $this->router = new \AltoRouter();
        $this->router->setBasePath('/POO4/22-App');
    }
    public function addRoutes($routes)
    {
        // Je peux appeler la méthode addRoutes de la classe AltoRouter
        $this->router->addRoutes($routes);
    }
    public function run()
    {
        $match = $this->router->match();
        if ($match) {
            // Par exemple, on sépare IndexController#index en ['IndexController', 'index']
            $target = explode('#', $match['target']);
            call_user_func_array( ['Webforce\\Controllers\\'.$target[0], $target[1]], $match['params'] );
            // /users/2 equivaut à new Webforce\Controllers\UserController() -> view(2)
            // /users equivaut à new Webforce\Controllers\UserController() -> all()
            // /upload equivaut à new Webforce\Controllers\UploadController() -> index()
        } else {
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found' );
        }
    }
}