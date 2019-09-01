<?php

require '../vendor/autoload.php';

use App\src\DAO\PostDAO;
use App\src\DAO\CommentDAO;

?>

<!DOCTYPE html>
<html>
<head>
    <meta CHARSET="utf-8">
    <title>Jean Forteroche</title>
</head>
<br>
<h1>Un billet pour l'Alaska</h1>
<a href="../public/index.php">Retour à l'accueil</a>
    <div>
        <h2><?= strip_tags($post->getTitle());?></h2>
        <p><?= strip_tags($post->getContent());?></p>
        <p><?= strip_tags($post->getAuthor());?></p>
        <p>Créé le : <?= strip_tags($post->getCreatedAt());?></p>
    </div>
    <br>
<br>
<?php foreach($comments as $comment) :?>
    <div>
        <h2><?= strip_tags($comment->getPseudo());?></h2>
        <p><?= strip_tags($comment->getContent());?></p>
        <p>Créé le : <?= strip_tags($comment->getCreatedAt());?></p>
    </div>
    <br>
    <?php endforeach; ?>
</body>
<footer>
    <p>Un site crée par Yoann Le Fur</p>
    <small>projet n°5 de la formation "Développeur Web Junior" d'OPENCLASSROOM</small>
</footer>
</html>