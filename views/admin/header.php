<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light fixed-top p-0 shadow">
    <ul class="col-12 px-0 nav flex-row">
        <?php if ($this->session->get('email')) : ?>
            <li class="nav-item btn-primary rounded-0 col-2">
                <a class="nav-link active px-0 text-white text-center" title="accueil" href="../public/index.php?route=admin"><i class="fa fa-chevron-left"></i></a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active px-0 text-center" title="Admin" href="../public/index.php?route=frontArticles"><i class="fa fa-home"></i></a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active px-0 text-center" title="Les articles" href="../public/index.php?route=articles"><i class="fa fa-file-text"></i></a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active px-0 text-center" title="Les commentaires signalés" href="../public/index.php?route=flagComments"><i class="fa fa-commenting" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active px-0 text-center" title="Nouvel article" href="../public/index.php?route=addArticle"><i class="fa fa-file"></i></a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active px-0 text-center" title="Déconnexion" href="../public/index.php?route=logout"><i class="fa fa-sign-out"></i></a>
            </li>
        <?php endif; ?>
    </ul>
</nav>