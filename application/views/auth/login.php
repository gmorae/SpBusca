<style>
  body {
    background: #eee url('https://www.c2tiapps.com/imagens/bg_login.png');
  }
</style>
<div class="container mt-5">
  <div class="row">
    <div class="mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="text-center">
            <h1><?php echo lang('login_heading'); ?></h1>
            <hr class="my-4">
            <p><?php echo lang('login_subheading'); ?></p>
            <div id="infoMessage" class="alert-danger"><?php echo $message; ?></div>
            <?php echo form_open("auth/login"); ?>
            <form>
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
              <div class="form-group row">
                <div class="col-sm-12">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                    </div>
                    <input type="password" class="form-control py-0" name="password" id="password" placeholder="Senha">
                  </div>
                </div>
              </div>
              
              <p class="text-left"><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
              <br>
              <div class="form-group row">
                <div class="col-sm-12">
                  <button type="submit" class="btn red accent-4 btn-md">Acessar</button>
                </div>
              </div>
              <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>