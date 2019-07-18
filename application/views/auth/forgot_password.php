<style>
      body {
            background: #eee url('https://www.c2tiapps.com/imagens/bg_login.png');
      }
</style>
<div class="container mt-5">
      <div class="row">
            <div class="mx-auto col-6">
                  <div class="card">
                        <div class="card-body">
                              <div class="text-center">
                                    <h1><?php echo lang('forgot_password_heading'); ?></h1>
                                    <hr class="my-4">
                                    <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>
                                    <div class="alert-danger" id="infoMessage"><?php echo $message; ?></div>

                                    <?php echo form_open("auth/forgot_password"); ?>
                                    <div class="form-group row">
                                          <div class="col-sm-12">
                                                <div class="input-group mb-2 mr-sm-2">
                                                      <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                                                      </div>
                                                      <input type="text" class="form-control py-0" name="identity" id="identity" placeholder="E-mail">
                                                </div>
                                          </div>
                                    </div>
                                    <br>
                                    <div class="row text-right">
                                          <div class="form-group row">
                                                <div class="col-sm-12">
                                                      <a href="<?= base_url('auth/login') ?>">
                                                            <button type="button" class="btn btn-light btn-md">Voltar</button>
                                                      </a>
                                                </div>
                                          </div>
                                          <div class="form-group row">
                                                <div class="col-sm-12">
                                                      <button type="submit" class="btn orange btn-md">Recuperar senha
                                                            <i class="fas fa-angle-double-right"></i>
                                                      </button>
                                                </div>
                                          </div>
                                    </div>
                                    <?php echo form_close(); ?>


                              </div>
                        </div>
                  </div>
            </div>
      </div>