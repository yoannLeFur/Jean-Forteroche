<nav>
    <ul>
        <?php if ($this->session->get('email')) : ?>
            <li>
                <a href="../public/index.php">Accueil</a>
            </li>
            <li>
                <a href="../public/index.php?route=logout">Déconnexion</a>
            </li>
            <li>
                <a href="../public/index.php?route=admin">Administration</a>
            </li>
            <li>
                <a href="../public/index.php?route=articles">Les articles</a>
            </li>
            <li>
                <a href="../public/index.php?route=flagComments">Les commentaires signalés</a>
            </li>
            <li>
                <a href="../public/index.php?route=addArticle">ajouter un articles</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
