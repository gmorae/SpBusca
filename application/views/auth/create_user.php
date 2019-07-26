<?php echo form_open("auth/create_user"); ?>
<div class="container">
      <div class="row">
            <div class="mx-auto col-md-7 mt-5">
                  <div class="card-body">
                        <form method="POST">
                        <h2 class="h1-responsive font-weight text-center mb-5"> Cadastro de empresa / lojas</h2>
                              <div class="text-center alert-danger" style="font-family:sans-serif" id="infoMessage"><?php echo $message; ?></div>
                              <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="nome" name="first_name" value="<?= set_value('first_name'); ?>" class="form-control" placeholder="Empresa / loja" required>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-mobile-alt prefix grey-text"></i>
                                    <input type="text" id="celular" name="phone" value="<?= set_value('phone'); ?>" class="form-control" placeholder="Celular" required>
                                    <label for="celular" class="font-weight-light"></label>
                              </div>
                              <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Login / email " required>
                              </div>

                              <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="senha" name="password" value="<?= set_value(''); ?>" class="form-control" placeholder="Senha (A senha deve ter no minímo 6 caracteres)" required>
                                   
                              </div>
                              <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="senha" name="password_confirm" value="<?= set_value(''); ?>" class="form-control" placeholder="Confirmação da senha" required>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-envelope prefix grey-text"></i>
                                    <input type="text" id="cnpj" value="<?= set_value('cnpj'); ?>" name="cnpj" class="form-control" placeholder="CNPJ (Não obrigatório)">
                              </div>
                              <div class="md-form">
                                    <i class="far fa-envelope prefix grey-text"></i>
                                    <input type="text" id="cep" value="<?= set_value('cep'); ?>" name="cep" class="form-control" placeholder="C.E.P (Não obrigatório)" onblur="pesquisacep(this.value);">
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="rua" value="<?= set_value('rua'); ?>" name="rua" class="form-control" placeholder="Endereço" required>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="bairro" value="<?= set_value('bairro'); ?>" name="bairro" class="form-control" placeholder="Bairro" required>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="cidade" value="<?= set_value('cidade'); ?>" name="cidade" class="form-control" placeholder="Cidade" required>
                              </div>
                              <div class="md-form">
                                    <i class="fas fa-map-marker prefix grey-text"></i>
                                    <input type="text" id="uf" value="<?= set_value('uf'); ?>" name="uf" class="form-control" placeholder="Estado" required>
                              </div>

                              <div class="md-form">
                                    <i class="fas fa-list-ol prefix grey-text"></i>
                                    <input type="text" id="numero" value="<?= set_value('numero') ?>" name="numero" class="form-control" placeholder="Número" required>
                              </div>
                              <div class="md-form">
                                    <i class="far fa-building prefix grey-text"></i>
                                    <input type="text" id="complemento" value="<?= set_value('complemento') ?>" name="complemento" class="form-control" placeholder="Complemento (Não obrigatório)">
                              </div>
                              <div class="text-center py-4 mt-3">
                                    <button class="btn btn-red" type="submit">Cadastrar</button>
                              </div>
                        </form>

                  </div>
            </div>
      </div>
</div>
<?php echo form_close(); ?>