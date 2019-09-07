<div class="row mx-0">
    <div class="col-12 mt-5 pb-3">
        <h1 class="text-center">Administration</h1>
        <a href="../public/index.php?route=admin">Retour à l'administration</a>
    </div>

    <?php foreach ($comments as $comment) : ?>
    <div>
        <div>
            <h4><?= ucfirst(strip_tags($comment->getPseudo())); ?></h4>
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
