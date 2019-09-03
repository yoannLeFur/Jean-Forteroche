<?php $this->title = "Nouvel article"; ?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <form method="post" action="../public/index.php?route=addPost">
        <div>
            <div>
                <label for="title">Titre</label>
            </div>
            <div>
                <input type="text" id="title" name="title">
            </div>
        </div>
        <div>
            <div>
                <label for="content">Contenu</label>
            </div>
            <div>
                <textarea id="content" name="content"></textarea>
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
    <a href="../public/index.php">Retour à l'accueil</a>
</div>