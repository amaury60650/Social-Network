<?php

class Model {
    protected $db;
    protected $table;
    public function __construct() {
        $this->table = str_replace( 'model', '', strtolower(get_called_class())); // get_called_class() renvoie le nom de la classe instanciée
    }
}

class PersonnModel extends Model { }
class ArticleModel extends Model { }

$personnModel = new PersonnModel();
$articleModel = new ArticleModel();

var_dump($personnModel);
var_dump($articleModel);
