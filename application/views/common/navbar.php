<nav class="navbar navbar-expand-lg navbar-dark red accent-4">
  <a class="navbar-brand black-text" href="<?= base_url() ?>"><img src="<?= base_url('imagens/logo.png') ?>" style="width: 100px" class="ml-5 img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link black-text my-1" href="<?= base_url() ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link black-text my-1" href="<?= base_url('contato') ?>">Fale conosco</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="<?= base_url('anuncie') ?>">
          <button class="btn btn-outline-black btn-sm my-0" type="submit"><i class="fas fa-plus"></i> Anuncie sua empresa</button>
        </a>
      </li>
      <!-- <li class="nav-item avatar">
        <a class="nav-link p-0 my-2" href="<?= base_url('auth/login') ?>">
          <img src="https://secure.webtoolhub.com/static/resources/icons/set110/7d2f7e06.png" class="rounded-circle z-depth-0" alt="avatar image" height="35">
        </a>
      </li> -->
    </ul>
  </div>
</nav>