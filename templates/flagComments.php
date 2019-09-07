<div class="row mx-0">
    <div class="col-12 mt-5 pb-3">
        <h1 class="text-center">Administration</h1>
    </div>
    <div>
        <h3 class="text-center m-0">Liste des commentaires signalés</h3>
    </div>
    <?php foreach ($comments

    as $comment) : ?>
    <div>
        <div>
            <h4><?= ucfirst(strip_tags($comment->getPseudo())); ?></h4>
        </div>
        <div>
            <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"><i
                        class="fa fa-trash" aria-hidden="true"></i></a>
            <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>"><i
                        class="fa fa-check" aria-hidden="true"></i></a>
        </div>
    </div>
    <div>
        <div>
            <p><?= ucfirst(strip_tags($comment->getContent())); ?></p>
        </div>
        <div>
            <p>Posté le <?= strip_tags($comment->getCreatedAt()); ?></p>
        </div>
    </div>
    <div>
        <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
    </div>
    <div>
        <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>">Valider le commantaire</a>
    </div>
<?php endforeach; ?>
</div>
