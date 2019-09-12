<header>
    <?php include('../templates/users/navUser.php'); ?>
</header>
<div>
    <h1>Un billet pour l'alaska</h1>
</div>
<div>
    <form method="post" action="../public/index.php?route=login">
        <div>
            <div>
                <label for="email">Email</label>
            </div>
            <div>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div>
            <div>
                <label for="password">Password</label>
            </div>
            <div>
                <input type="password" id="password" name="password" required>
            </div>
            <?= $this->session->show('error_login'); ?>
        </div>
        <input type="submit" id="submit" name="submit">
    </form>
</div>