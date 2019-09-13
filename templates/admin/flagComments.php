<?php $this->title = "les commentaires signalés"; ?>
<header>
    <?php include('../templates/admin/header.php'); ?>
</header>
<div class="row mx-0">
    <div class="col-12 mt-5 py-3">
        <h1 class="text-center">Liste des commentaires signalés</h1>
    </div>
</div>
<div class="row mx-0">
    <div class="col-lg-8 col-sm-12 ml-auto mr-auto px-0 py-3 my-2 text-dark">
        <div class="row m-0">
            <?php foreach ($comments as $comment) : ?>
                <div class="col-12 px-lg-5 px-sm-2 py-3 my-2 list-group-item-danger text-dark">
                    <div class="row m-0 pb-3">
                        <div class="col-8 text-left px-0 py-1">
                            <h4 class="m-0"><?= ucfirst(strip_tags($comment->getPseudo())); ?></h4>
                        </div>
                        <div class="col-4 text-right p-0">
                            <a class="btn btn-danger" title="Supprimer le commentaire"
                               href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"><i
                                        class="fa fa-trash" aria-hidden="true"></i></a>
                            <a class="btn btn-success"
                               title="Désignalé le commentaire"
                               href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>"><i
                                        class="fa fa-check" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12">
                            <p><?= ucfirst(strip_tags($comment->getContent())); ?></p>
                        </div>
                        <div class="col-12">
                            <p>Posté le <?= strip_tags($comment->getCreatedAt()); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>