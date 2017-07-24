<?php

/*
Ce fichier doit être appellé avec AJAX.
1. On va instancier PDO. http://www.ncls.biz/webmasters/requetes_sql_pdo_php.php?id_article=8

2. Créer une bdd ajax avec une table user et 3 colonnes id (int), name (varchar), firstname (varchar)

3. On récupére $_POST['name'] et $_POST['firstname']

4. On vérifie que les 2 champs name et firstname ne soient pas vide

5. Insérer l'utilisateur dans la bdd avec une requête préparée.


*/