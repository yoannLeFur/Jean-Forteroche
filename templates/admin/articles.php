<?php $this->title = "Les articles"; ?>
<header>
    <?php include('../templates/admin/navAdmin.php'); ?>
</header>
    <h1>Un billet pour l'Alaska</h1>
<?php foreach ($articles as $article) : ?>
    <div>
        <h2>
            <?= strip_tags($article->getTitle()); ?>
        </h2>
        <p><?= strip_tags($article->getContent()); ?></p>
        <p><?= strip_tags($article->getAuthor()); ?></p>
        <p>Créé le : <?= strip_tags($article->getCreatedAt()); ?></p>
        <a href="../public/index.php?route=editArticle&articleId=<?= strip_tags($article->getId()); ?>"">Modifier un article</a>
        <a href="../public/index.php?route=deleteArticle&articleId=<?= strip_tags($article->getId()); ?>"">Supprimer un article</a>
    </div>

<?php endforeach; ?>