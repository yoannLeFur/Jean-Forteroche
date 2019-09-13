<?php $this->title = "modifier un article"; ?>
<header>
    <?php include('../templates/admin/header.php'); ?>
</header>
<div class="row mx-0">
    <div class="col-12 mt-5 py-3">
        <h1 class="text-center">Edition d'un article</h1>
    </div>
</div>
<div class="row mx-0">
    <div class="col-lg-8 m-auto">
        <form method="post"
              action="../public/index.php?route=editArticle&articleId=<?= strip_tags($article->getId()); ?>">
            <div class="form-group col-lg-12 col-md-10 mt-4">
                <label for="title">Titre</label>
                <input class="col-12 form-control shadow rounded bg-light" type="text" id="title" name="title"
                       value="<?= htmlspecialchars($article->getTitle()); ?>" required>
            </div>
            <div class="form-group col-lg-12 col-md-10 mt-4">
                <label for="content">Contenu</label>
                <div class="shadow rounded bg-light">
                    <textarea class="col-12 form-control shadow rounded bg-light" id="content" name="content"
                              rows="10" required><?= strip_tags($article->getContent()); ?>
                    </textarea>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-10 mt-4">
                <label for="author">Auteur</label>
                <input class="col-12 form-control shadow rounded bg-light" type="text" id="author" name="author"
                       value="<?= htmlspecialchars($article->getAuthor()); ?>">
            </div>
            <div class="col-12 p-0">
                <input type="submit" class="offset-4 col-4 btn btn-primary" value="Mettre à jour" id="submit"
                       name="submit">
            </div>
        </form>
    </div>
</div>
</div>

<script src="../public/js/main.js"></script>