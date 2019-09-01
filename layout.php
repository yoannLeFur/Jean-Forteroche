<?php

require 'Database.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta CHARSET="utf-8">
    <title>Jean Forteroche</title>
</head>
<body>
    <h1>Un billet pour l'Alaska</h1>
    <?php
    $db = new Database();
    echo $db->getConnexion();
    ?>
</body>
<footer>
    <p>Un site crée par Yoann Le Fur</p>
    <small>projet n°5 de la formation "Développeur Web Junior" d'OPENCLASSROOM</small>
</footer>
</html>