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
    <?php foreach($posts as $post) : ?>
        <div>
            <h2><a href="../public/index.php?route=post&postId=<?= strip_tags($post->getId());?>"><?= strip_tags($post->getTitle());?></a></h2>
            <p><?= strip_tags($post->getContent());?></p>
            <p><?= strip_tags($post->getAuthor());?></p>
            <p>Créé le : <?= strip_tags($post->getCreatedAt());?></p>
        </div>
        <br>
    <?php endforeach; ?>
</body>
<footer>
    <p>Un site crée par Yoann Le Fur</p>
    <small>projet n°5 de la formation "Développeur Web Junior" d'OPENCLASSROOM</small>
</footer>
</html>