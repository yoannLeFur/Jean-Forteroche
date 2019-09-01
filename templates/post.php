<?php $this->title = "Post"; ?>
<h1>Un billet pour l'Alaska</h1>
<a href="../public/index.php">Retour à l'accueil</a>
<div>
    <h2><?= strip_tags($post->getTitle()); ?></h2>
    <p><?= strip_tags($post->getContent()); ?></p>
    <p><?= strip_tags($post->getAuthor()); ?></p>
    <p>Créé le : <?= strip_tags($post->getCreatedAt()); ?></p>
</div>
<br>
<br>
<?php foreach ($comments as $comment) : ?>
    <div>
        <h2><?= strip_tags($comment->getPseudo()); ?></h2>
        <p><?= strip_tags($comment->getContent()); ?></p>
        <p>Créé le : <?= strip_tags($comment->getCreatedAt()); ?></p>
    </div>
    <br>
<?php endforeach; ?>
