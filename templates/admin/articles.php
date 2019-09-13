<?php $this->title = "Les articles"; ?>
<header>
    <?php include('../templates/admin/header.php'); ?>
</header>

<div class="row mx-0">
    <div class="col-12 mt-5 py-3">
        <h1 class="text-center">Liste des articles publiés</h1>
    </div>
    <div class="row mx-0">
        <div class="col-12 py-2 px-0">
            <?php foreach ($articles as $article): ?>
                <div class="offset-lg-1 col-lg-10 col-sm-12 mx-auto px-lg-5 px-sm-2 py-3 my-2 bg-light text-dark">
                    <div class="row mx-0">
                        <div class="col-8 text-left px-0 py-1">
                            <h2 class="m-0"><?= ucfirst(strip_tags($article->getTitle())); ?></h2>
                        </div>
                        <div class="col-4 text-right p-0 my-auto">
                            <a class="btn btn-primary" title="Editer"
                               href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a class="btn btn-danger" title="Supprimer"
                               href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"><i
                                        class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-12">
                            <p><?= ucfirst(strip_tags($article->getContent())); ?></p>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-12">
                            <p>Créé le : <small><?= strip_tags($article->getCreatedAt()); ?></small>
                                par <?= ucfirst(strip_tags($article->getAuthor())); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>