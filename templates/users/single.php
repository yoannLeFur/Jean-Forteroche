<?php $this->title = "Article"; ?>
<h1>Un billet pour l'Alaska</h1>
<a href="../public/index.php">Retour à l'accueil</a>
<div>
    <h2><?= strip_tags($article->getTitle()); ?></h2>
    <p><?= strip_tags($article->getContent()); ?></p>
    <p><?= strip_tags($article->getAuthor()); ?></p>
    <p>Créé le : <?= strip_tags($article->getCreatedAt()); ?></p>
</div>
<div>
    <form method="post" action="../public/index.php?route=addComment&articleId=<?= strip_tags($article->getId()); ?>">
        <div>
            <div>
                <label for="pseudo">Pseudo</label>
            </div>
            <div>
                <input type="text" id="pseudo" name="pseudo" minlength="2" maxlength="50" required>
            </div>
        </div>
        <div>
            <div>
                <label for="content">Message</label>
            </div>
            <div>
                <textarea id="content" name="content" rows="10" minlength="10" maxlength="400" required></textarea>
            </div>
        </div>
        <input type="submit" value="Publier" id="submit" name="submit">
    </form>
<?php foreach ($comments as $comment) : ?>
    <div>
        <h2><?= strip_tags($comment->getPseudo()); ?></h2>
        <p><?= strip_tags($comment->getContent()); ?></p>
        <p>Créé le : <?= strip_tags($comment->getCreatedAt()); ?></p>
        <?php if($comment->isFlag()) :?>
        <p>Ce commentaire a été signalé</p>
        <?php endif; ?>
        <?php if(!$comment->isFlag()) : ?>
        <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
        <?php endif; ?>
    </div>
    <br>
<?php endforeach; ?>
</div>
