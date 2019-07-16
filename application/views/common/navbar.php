<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark " style="background: linear-gradient(to right, #ce93d8  20%, #ffffff 100%);">
  <a class="navbar-brand ml-md-5" href="<?= base_url() ?>" style="font-size:30px"><img src="<?= base_url('imagens/logo.png') ?>" style="width: 50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-md-5" id="navbarSupportedContent-333" style="font-size:23px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link"style="color: #4a148c; font-family: 'Times New Roman', Times, serif"   href="<?= base_url('index.php/home/') ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #4a148c; font-family: 'Times New Roman', Times, serif " href="<?= base_url('index.php/home/servicos') ?>">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #4a148c; font-family: 'Times New Roman', Times, serif " href="<?= base_url('index.php/home/estruturas') ?>">Estruturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: #4a148c; font-family: 'Times New Roman', Times, serif " href="<?= base_url('index.php/home/contato') ?>">Contato</a>
      </li>
      
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons" style="font-size:20px; ">
      <li class="nav-item" >
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-facebook" style="color: #4a148c; "></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-instagram" style="color: #4a148c; "></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-whatsapp" style="color: #4a148c; "></i>
        </a>
      </li>
      
    </ul>
  </div>
</nav>
<!--/.Navbar -->