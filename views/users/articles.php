<?php $this->title = "Accueil"; ?>
<header>
    <?php include('../views/users/header.php'); ?>
</header>
<main>
    <div class="row mx-0">
        <div class="col-12 mt-5 pt-2">
            <p class="font-weight-bold text-center"><?= $this->session->show('flagComment'); ?></p>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-12 mt-5 pt-3 pb-5">
            <h1 class="text-center">Un billet pour l'Alaska</h1>
        </div>
    </div>
    <div class="row mx-0 pb-3">
        <div class="d-flex justify-content-center flex-wrap">
            <?php foreach ($articles as $article): ?>
                <a class="btn btn-light col-lg-3 col-md-5 col-sm-10 mx-md-3 my-3 bg-light text-dark shadow"
                   href="../public/index.php?route=article&articleId=<?= strip_tags($article->getId()); ?>">
                    <h2><?= ucfirst(strip_tags($article->getTitle())); ?></h2>
                    <p class="text-left"><?= ucfirst(substr(strip_tags($article->getContent()), 0, 300)); ?>
                        &nbsp;[...]</p>
                    <p class="text-left">Créé le : <small><?= strip_tags(date('d/m/Y H:i:s', strtotime($article->getCreatedAt()))); ?></small>
                        par <?= ucfirst(strip_tags($article->getAuthor())); ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<footer>
    <?php include('../views/users/footer.php'); ?>
</footer>
