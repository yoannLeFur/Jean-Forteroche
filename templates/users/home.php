<?php $this->title = "Accueil"; ?>
<?= $this->session->show('addArticle'); ?>
<header>
    <?php include('../templates/users/navUser.php'); ?>
</header>
<h1>Un billet pour l'Alaska</h1>
<?php foreach ($articles as $article) : ?>
    <div>
        <h2>
            <a href="../public/index.php?route=article&articleId=<?= strip_tags($article->getId()); ?>"><?= strip_tags($article->getTitle()); ?></a>
        </h2>
        <p><?= strip_tags($article->getContent()); ?></p>
        <p><?= strip_tags($article->getAuthor()); ?></p>
        <p>Créé le : <?= strip_tags($article->getCreatedAt()); ?></p>
    </div>
<?php endforeach; ?>
