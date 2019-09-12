<?php $this->title = "modifier un article"; ?>
<header>
    <?php include('../templates/admin/navAdmin.php'); ?>
</header>
<h1>Un billet pour l'alaska</h1>
<div>
    <form method="post" action="../public/index.php?route=editArticle&articleId=<?= strip_tags($article->getId()); ?>">
        <div>
            <div>
                <label for="title">Titre</label>
            </div>
            <div>
                <input type="text" id="title" value="<?= strip_tags($article->getTitle()); ?>" name="title" minlength="5" maxlength="50" required>
            </div>
        </div>
        <div>
            <div>
                <label for="content">Contenu</label>
            </div>
            <div>
                <textarea id="content" name="content" rows="10" minlength="10" required><?= strip_tags($article->getContent()) ?></textarea>
            </div>
        </div>
        <div>
            <div>
                <label for="author">Auteur</label>
            </div>
            <div>
                <input id="author" name="author" type="text" value="<?= strip_tags($article->getAuthor()) ?>" minlength="5" maxlength="30" required>
            </div>
        </div>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>