<?php

require '../vendor/autoload.php';

use App\src\DAO\PostDAO;

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
    $post = new PostDAO();
    $posts = $post->getPosts();
    while($post = $posts->fetch())
    {
        ?>
        <div>
            <h2><a href="../public/index.php?route=post&postId=<?= strip_tags($post->id);?>"><?= strip_tags($post->title);?></a></h2>
            <p><?= strip_tags($post->content);?></p>
            <p><?= strip_tags($post->author);?></p>
            <p>Créé le : <?= strip_tags($post->createdAt);?></p>
        </div>
        <br>
        <?php
    }
    $posts->closeCursor();
    ?>
</body>
<footer>
    <p>Un site crée par Yoann Le Fur</p>
    <small>projet n°5 de la formation "Développeur Web Junior" d'OPENCLASSROOM</small>
</footer>
</html>