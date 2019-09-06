<!DOCTYPE html>
<html lang="fr">
<head>
    <meta CHARSET="utf-8">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <ul>
        <?php if (!$this->session->get('email')) : ?>
        <li>
            <a href="../public/index.php?route=login">Connexion</a>
        </li>
        <?php endif; ?>
        <?php if ($this->session->get('email')) : ?>
        <li>
            <a href="../public/index.php?route=logout">Déconnexion</a>
        </li>
        <?php endif; ?>
    </ul>
</nav>
<div id="content">
    <?= $content ?>
</div>
</body>
<footer>
    <p>Un site crée par Yoann Le Fur</p>
    <small>projet n°5 de la formation "Développeur Web Junior" d'OPENCLASSROOM</small>
</footer>
</html>
