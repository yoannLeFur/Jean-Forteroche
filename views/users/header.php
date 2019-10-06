<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light fixed-top p-0 shadow">
    <ul class="col-12 nav flex-row ">
        <li class="nav-item btn-light rounded-0 col-2">
            <a class="nav-link active text-center px-2" href="../public/index.php"><i class="fa fa-home"></i></a>
        </li>
        <?php if (!$this->session->get('email')) : ?>
            <li class="nav-item btn-light rounded-0 col-10">
                <a class="nav-link active text-center px-2" href="../public/index.php?route=login">Administration</a>
            </li>
        <?php endif; ?>
        <?php if ($this->session->get('email')) : ?>
            <li class="nav-item btn-primary rounded-0 col-8">
                <a class="nav-link active text-center text-white px-3" href="../public/index.php?route=admin"><?= $this->session->get('email'); ?>
                </a>
            </li>
            <li class="nav-item btn-light rounded-0 col-2">
                <a class="nav-link active text-center px-2" href="../public/index.php?route=logout"><i class="fa fa-sign-out"></i></a>
            </li>

        <?php endif; ?>
    </ul>
</nav>