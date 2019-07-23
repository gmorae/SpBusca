<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="text-center">
                <p class="h3">
                    Conteúdos editáveis
                </p>
            </div>

        </div>
        <div class="col-6">
            <div class="text-center">
                <p class="h3">
                    Conteúdo publicado
                </p>
            </div>
        </div>
    </div>
    <div class="card-deck">
        <div class="card my-4">
            <div class="view overlay zoom">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="ml-md-3">
                <a href="<?= base_url('Administrador/EditarImagem') ?>">
                    <button type="button" class="btn btn-sm btn-elegant"><i class="far fa-image pr-2" aria-hidden="true"></i>Editar Imagem</button>
                </a>
            </div>
            <div class="card-body">
                <a href="<?= base_url('Administrador/EditarTitulo') ?>">
                    <button type="button" class="btn btn-sm btn-elegant"><i class="fas fa-align-center pr-2" aria-hidden="true"></i>Editar Titulo</button>
                </a>
                <hr>
                <a href="<?= base_url('Administrador/EditarDescricao') ?>">
                    <button type="button" class="btn btn-sm btn-elegant"><i class="far fa-comment-alt pr-2" aria-hidden="true"></i>Editar Descrição</button>
                </a>
                <br>
                <br>
                <div class="row">
                    <div class="mx-auto">
                        <a href="<?= base_url('Administrador/EditarRedeSocial') ?>">
                            <button type="button" class="btn btn-sm btn-elegant"><i class="fab fa-whatsapp pr-2" aria-hidden="true"></i>Editar Número</button>
                        </a>
                        <a href="<?= base_url('Administrador/EditarRedeSocial') ?>">
                            <button type="button" class="btn btn-sm btn-elegant"><i class="fab fa-instagram pr-2" aria-hidden="true"></i>Editar Instagram</button>
                        </a>
                        <a href="<?= base_url('Administrador/EditarRedeSocial') ?>">
                            <button type="button" class="btn btn-sm btn-elegant"><i class="fab fa-facebook-f pr-2" aria-hidden="true"></i>Editar Facebook</button>
                        </a>
                    </div>
                </div>
                <br>
                <div class='text-right mt-3'>
                    <a href="<?= base_url('Administrador/EditarSite') ?>">
                        <button type="button" class="btn btn-sm btn-elegant"><i class="fas fa-wifi pr-2" aria-hidden="true"></i>Editar Site</button>
                    </a>
                </div>
            </div>
        </div>
        <?= $card ?>
    </div>
</div>