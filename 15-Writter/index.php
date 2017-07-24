<?php

class Writer {
    public function write($text) {
        return $text;
    }
}

class FileWriter extends Writer {
    private $file;
    public function __construct($file) {
        $this->file = $file;
    }
    public function write($text) {
        $file = fopen($this->file, 'a');
        fwrite($file, $text);
        fclose($file);
    }
}

class DatabaseWriter extends Writer {
    private static $database;
    public function __construct($infos) {
        if (!self::$database) { // On vérifie si PDO a déjà été instancié
            self::$database = new PDO(
                'mysql:host='.$infos['host'].';dbname='.$infos['dbname'], // DSN pour pdo SGBD:host=HOST;dbname=DATABASE
                $infos['user'], // Utilisateur bdd
                $infos['password'] // Mot de passe bdd
            );
        }
        $this->db = self::$database;
    }
    public function write($text) {
        $query = $this->db->prepare('INSERT INTO log(content) VALUES(:content)');
        $query->bindValue(':content', $text);
        $query->execute();
    }
}

$writer = new DatabaseWriter([
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'projet',
    'table' => 'log'
]);
var_dump($writer);
echo $writer->write('Mon texte');
