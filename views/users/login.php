<header>
    <?php include('../views/users/header.php'); ?>
</header>
<main>
    <p class=" col-12 py-2 text-center"><?= $this->session->show('register'); ?></p>

    <div class="row mx-0">
        <div class="col-12 mt-5 py-5">
            <h1 class="text-center">Un billet pour l'Alaska</h1>
        </div>
    </div>
    <div class="row m-0">
        <div class="col-lg-8 col-sm-10 m-auto mt-5">
            <h3 class="text-center">Connexion</h3>
        </div>
        <div class="col-lg-8 m-auto">
            <form method="post" action="../public/index.php?route=login">
                <div class="form-group col-lg-12 col-md-10 py-2">
                    <label for="email">Email</label>
                    <input class="col-lg-12 form-control shadow rounded bg-light" type="email" id="email"
                           name="email">
                </div>
                <div class="form-group col-lg-12 col-md-10 py-2">
                    <label for="password">Mot de passe</label>
                    <input class="col-12 form-control shadow rounded bg-light" type="password" id="password"
                           name="password">
                    <div class="bg-danger">
                        <p class=" col-12 my-1 text-center text-white"><?= $this->session->show('error_login'); ?></p>
                    </div>
                </div>
                <div class="col-12 px-0 pt-4 pb-5">
                    <input type="submit" class="offset-4 col-4 btn btn-primary" value="Connexion" id="submit"
                           name="submit">
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <?php include('../views/users/footer.php'); ?>
</footer>