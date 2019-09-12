<nav>
    <ul>
        <?php if (!$this->session->get('email')) : ?>
            <li>
                <a href="../public/index.php?route=login">Connexion</a>
            </li>
        <?php endif; ?>
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
        <?php endif; ?>
    </ul>
</nav>