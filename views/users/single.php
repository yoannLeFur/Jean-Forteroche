<?php $this->title = "Article"; ?>

<header>
    <?php include('../views/users/header.php'); ?>
</header>
<main>
    <div class="row mx-0">
        <div class="col-12 mt-5 pt-2">
            <p class="font-weight-bold text-center"><?= $this->session->show('addComment'); ?></p>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-lg-2 col-md-1 col-sm-1 mt-5 pt-3 pb-5">
            <a class="h1 px-3" href="../public/index.php?route=frontArticles"><i class="fa fa-chevron-left"></i></a>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-5 mt-5 pt-3 pb-5">
            <h1 class="text-center p-0">Un billet pour l'Alaska</h1>
        </div>
    </div>
    <div id="content" class="col-lg-12 col-md-12 col-sm-12 px-0">
        <div class="offset-lg-2 col-lg-8 px-lg-5 px-md-3 py-3 my-2 bg-light text-dark">
            <div class="row mx-0">
                <div class="col-12 text-left">
                    <h2><?= ucfirst(strip_tags($article->getTitle())); ?></h2>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12">
                    <p><?= ucfirst(strip_tags($article->getContent())); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Créé le : <small><?= strip_tags(date('d/m/Y H:i:s', strtotime($article->getCreatedAt()))) ?></small>
                        par <?= ucfirst(strip_tags($article->getAuthor())); ?></p>
                </div>
            </div>

        </div>

        <!-- commentaires -->

        <div class="offset-lg-2 col-lg-8 col-md-12">
            <div id="comments" class="col-12 bg-light text-dark">
                <h3 class="pt-5 pb-2 text-center">Commentaires</h3>

                <!--formulaire commentaire -->

                <form method="post"
                      action="../public/index.php?route=addComment&articleId=<?= strip_tags($article->getId()); ?>">
                    <div class="row mx-0 form-group">
                        <div class="col-12">
                            <label>Pseudo</label>
                            <input type="text" class="col-12 form-control shadow rounded" name="pseudo" required>
                        </div>
                    </div>
                    <div class="row mx-0 form-group">
                        <div class="col-12">
                            <label>Commentaire</label>
                            <textarea class="col-12 form-control shadow rounded" name="content" rows="5"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 my-2 mx-auto">
                        <input class="col-12 btn btn-primary" type="submit" value="Publier" id="submit"
                               name="submit">
                    </div>
                </form>

                <!-- affichage des commentaires -->

                <?php foreach ($comments

                as $comment) : ?>
                <?php if ($comment->isFlag()) : ?>
                <div class="list-group-item-danger border-bottom border-dark my-4 p-2">
                    <?php endif; ?>
                    <?php if (!$comment->isFlag()) : ?>
                    <div class="border-bottom border-dark my-4 p-2">
                        <?php endif; ?>
                        <div class="row mx-0">
                            <div class="col-6 text-left">
                                <h4><?= ucfirst(strip_tags($comment->getPseudo())); ?></h4>
                            </div>
                            <div class="col-6 text-right">
                                <p>Posté le <?= strip_tags(date('d/m/Y H:i:s', strtotime($comment->getCreatedAt()))); ?></p>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <div class="col-12">
                                <p><?= ucfirst(strip_tags($comment->getContent())); ?></p>
                            </div>
                        </div>
                        <div class="row mx-0">
                            <?php if ($comment->isFlag()) : ?>
                                <div class="col-12 text-center">
                                    <p class="bg-danger m-0">Ce commentaire à été signalé</p>
                                </div>
                            <?php endif; ?>
                            <?php if (!$comment->isFlag()) : ?>
                                <div class="offset-10 col-2 text-right">
                                    <a class="btn btn-danger text-white"
                                       href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>"
                                       title="Signalé le commentaire"><i
                                                class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php include('../views/users/footer.php'); ?>
</footer>
