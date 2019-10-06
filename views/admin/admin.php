<header>
    <?php include('../views/admin/header.php'); ?>
</header>
<main>
    <div class="row mx-0">
        <div class="col-12 mt-5 pt-2">
            <p class="font-weight-bold text-center"><?= $this->session->show('login'); ?></p>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-12 mt-5 pt-2 pb-5">
            <h1 class="text-center">Administration</h1>
        </div>
    </div>
    <div class="row mx-0">
        <div class="col-12 d-flex justify-content-center flex-wrap p-0">
            <a class="link btn btn-light col-lg-4 col-md-5 col-sm-12 mx-md-3 my-3 bg-light text-dark shadow"
               href="../public/index.php?route=articles">
                <h3>Les articles publiés</h3>
            </a>
            <a class="link btn btn-light col-lg-4 col-md-5 col-sm-12 mx-md-3 my-3 bg-light text-dark shadow"
               href="../public/index.php?route=flagComments">
                <h3>Les commentaires signalés</h3>
            </a>
            <a class=" link btn btn-light col-lg-4 col-md-5 col-sm-12 mx-md-3 my-3 bg-light text-dark shadow"
               href="../public/index.php?route=addArticle">
                <h3>Nouvel article</h3>
            </a>
        </div>
    </div>
</main>
