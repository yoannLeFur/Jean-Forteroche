<?php $this->title = "Nouvel article"; ?>
<header>
    <?php include('../templates/admin/navAdmin.php'); ?>
</header>
<div>
    <form method="post" action="../public/index.php?route=addArticle">
        <div>
            <div>
                <label for="title">Titre</label>
            </div>
            <div>
                <input type="text" id="title" name="title" minlength="5" maxlength="50" required>
            </div>
        </div>
        <div>
            <div>
                <label for="content">Contenu</label>
            </div>
            <div>
                <textarea id="content" name="content" minlength="10" required></textarea>
            </div>
        </div>
        <div>
            <div>
                <label for="author">Auteur</label>
            </div>
            <div>
                <select id="author" name="author" required>
                    <option value="Jean Forteroche" selected="selected">Jean Forteroche</option>
                </select>
            </div>
        </div>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>