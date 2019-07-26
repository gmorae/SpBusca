<div class="container">
    <div class="row">
        <div class="mx-auto col-md-7 mt-5">
            <div class="card-body">
                <form id="upload-form" method="post" enctype="multipart/form-data">
                    <h2 class="h1-responsive font-weight text-center mb-5"> Cadastre a visualização da sua empresa</h2>
                    <div class="custom-file mt-3">
                        <input type="file" class="custom-file-input" name="arquivo" id="arquivo">
                        <label class="custom-file-label" for="arquivo" data-browse="Selecionar imagem">Imagem da sua empresa</label>
                    </div>
                
                    <div class="md-form">
                        <i class="fas fa-image prefix grey-text"></i>
                        <input type="text" id="nomeImagem" name="nomeImagem" value="<?= set_value('nomeImagem'); ?>" class="form-control" placeholder="Nome da Imagem" required>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="nome" name="empresa" value="<?= set_value('empresa'); ?>" class="form-control" placeholder="Empresa / loja" required>
                    </div>
                    <div class="md-form">
                        <i class="fas fa-align-justify prefix grey-text"></i>
                        <input type="text" id="descricao" name="descricao" value="<?= set_value('descricao'); ?>" class="form-control" placeholder="Descrição sobre a empresa" required>
                        <label for="descricao" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fab fa-whatsapp prefix grey-text"></i>
                        <input type="text" id="celular" name="numero" value="<?= set_value('numero'); ?>" class="form-control" placeholder="Número whatsapp" required>
                        <label for="celular" class="font-weight-light"></label>
                    </div>
                    <div class="md-form">
                        <i class="fab fa-facebook-f prefix grey-text"></i>
                        <input type="text" id="facebook" value="<?= set_value('facebook') ?>" name="facebook" class="form-control" placeholder="URL do facebook">
                    </div>
                    <div class="md-form">
                        <i class="fab fa-instagram prefix grey-text"></i>
                        <input type="text" id="instagram" value="<?= set_value('instagram') ?>" name="instagram" class="form-control" placeholder="URL do instagram">
                    </div>
                    <div class="md-form">
                        <i class="fas fa-globe prefix grey-text"></i>
                        <input type="text" id="site" value="<?= set_value('site') ?>" name="site" class="form-control" placeholder="URL do site">
                    </div>
                    <div class="text-center mt-3">
                        <a class="btn btn-red" onclick="document.getElementById('upload-form').submit();">publicar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>