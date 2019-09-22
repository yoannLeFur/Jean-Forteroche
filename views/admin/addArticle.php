<?php $this->title = "Nouvel article"; ?>

<?php include('../views/admin/header.php'); ?>

<div class="row mx-0">
    <div class="col-12 mt-5 py-3">
        <h1 class="text-center">Ajouter un article</h1>
    </div>
</div>
<div class="row mx-0">
    <div class="col-lg-8 m-auto">
        <form method="post" action="../public/index.php?route=addArticle">
            <div class="form-group col-lg-12 col-md-10 mt-4">
                <label for="title">Titre</label>
                <input class="col-12 form-control shadow rounded bg-light" type="text" id="title" name="title"
                       required>
            </div>
            <div class="form-group col-lg-12 col-md-10">
                <label for="content">Contenu</label>
                <div class="shadow rounded bg-light">
                    <textarea class="col-12 form-control shadow rounded bg-light" id="content" name="content" rows="10">
                    </textarea>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-10">
                <label for="author">Auteur</label>
                <select class="col-12 form-control shadow rounded bg-light" name="author" required>
                    <option value="Jean Forteroche" selected="selected">Jean Forteroche</option>
                </select>
            </div>
            <div class="col-12 p-0">
                <input type="submit" class="offset-4 col-4 btn btn-primary" value="Publier" id="submit" name="submit">
            </div>
        </form>
    </div>
</div>

<script src="../public/js/main.js"></script>
