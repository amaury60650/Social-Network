<?php
/* 1. Créer la classe Product
2. La classe Product posséde 5 attributs, name, description, image, prix et db
3. Créer une base de données avec une table product qui posséde les colonnes id (int), name (varchar), description (text), image (varchar) et prix (decimal)
4. La classe Product aura 6 méthodes : 
__construct() -> instancie l'attribut db avec PDO
setName($name), -> Définit l'attribut name du produit
setDescription($description), -> Définit l'attribut description du produit
setImage($image), -> Définit l'attribut image du produit
setPrice($price) -> Définit l'attribut price du produit
et save() -> Faire une requête en bdd pour ajouter le produit
*/

class Product {
    private $name;
    private $description;
    private $image;
    private $price;
    private static $db;
    public function __construct() {
        if ( !self::$db instanceof PDO ) { // Permet de vérifier plus précisément si self::$db est une instance de PDO.
            self::$db = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
        }
        $this->db = self::$db;
    }
    public function setName($name) {
        $this->name = trim($name);
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function save() {
        $query = $this->db->prepare('INSERT INTO product(name, description, image, price) VALUES(:name, :description, :image, :price)');
        $query->bindValue(':name', $this->name);
        $query->bindValue(':description', $this->description);
        $query->bindValue(':image', $this->image);
        $query->bindValue(':price', $this->price);
        $query->execute();
    }
}

$baguette = new Product();
$baguette->setName('    Baguette      ');
$baguette->setDescription('Ma baguette');
$baguette->setImage('http://image.jpg');
$baguette->setPrice(0.39);
var_dump($baguette);
$baguette->save(); // -> Insère la baguette en base de données

$baguette2 = new Product();
$baguette2->setName('    Baguette2      ');
$baguette2->setDescription('Ma baguette2');
$baguette2->setImage('http://image.jpg');
$baguette2->setPrice(25.14);
var_dump($baguette2);
$baguette2->save(); // -> Insère la baguette en base de données

$baguette3 = new Product();
$baguette3->setName('    Baguette3      ');
$baguette3->setDescription('Ma baguette3');
$baguette3->setImage('http://image.jpg');
$baguette3->setPrice(10.39);
var_dump($baguette3);
$baguette3->save(); // -> Insère la baguette en base de données