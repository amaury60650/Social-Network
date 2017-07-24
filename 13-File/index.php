<?php

$file = fopen('test.txt', 'a'); // Le second paramètre permet de définir le mode d'ouverture du fichier, ici en écriture.
fwrite($file, date('d/m/Y h:i:s') . ' : Le contenu du fichier'."\n");
fclose($file); // Permet de fermer le fichier

$file = fopen('index.php', 'r'); // On ouvre le fichier en mode lecture
$content = fread($file, filesize('index.php'));
fclose($file);

var_dump($content);

$file = new File('test.txt');
echo $file->read();