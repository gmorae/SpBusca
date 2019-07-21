<?php $user = $this->ion_auth->user()->row()->username; ?>
<?php $email = $this->ion_auth->user()->row()->email; ?>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark red accent-4 lighten-1">
    <a class="navbar-brand" href="<?= base_url('administrador') ?>"><?= $user ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('administrador') ?>">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">Editar dados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('#') ?>">Editar senha</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item my-1">
                <a class="nav-link"><b><?= $email ?></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light" href="<?= base_url('auth/logout') ?>">
                    <button class="btn btn-outline-white btn-sm my-0" type="submit">sair<i class="fas fa-sign-out-alt"></i></button>

                </a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->