<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card gradient-card">
                <div class="card-image">
                    <a href="">
                        <div class="text-white d-flex h-100 mask young-passion-gradient">
                            <div class="first-content align-self-center p-3">
                                <h3 class="card-title">Mensalidades</h3>
                                <p class="lead mb-0">Clique e saiba mais</p>
                            </div>
                            <div class="second-content align-self-center mx-auto text-center">
                                <i class="far fa-money-bill-alt fa-3x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="third-content ml-auto mr-4 mb-2">
                    <p class="text-uppercase text-muted">mensal</p>
                    <h4 class="font-weight-bold float-right">R$ <?= $mensal['count(id) * 30'] ? $mensal['count(id) * 30'] : '0' ?></h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card gradient-card">
                <div class="card-image">
                    <a href="<?= base_url('auth') ?>">
                        <div class="text-white d-flex h-100 mask young-passion-gradient">
                            <div class="first-content align-self-center p-3">
                                <h3 class="card-title">Usuários cadastrados</h3>
                                <p class="lead mb-0">Clique e saiba mais</p>
                            </div>
                            <div class="second-content  align-self-center mx-auto text-center">
                                <i class="fas fa-user fa-3x"></i>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="third-content  ml-auto mr-4 mb-2">
                    <p class="text-uppercase text-muted">Inscritos</p>
                    <h4 class="font-weight-bold float-right"><?= $soma['count(id)'] ? $soma['count(id)'] : '0' ?> empresas / lojas</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card gradient-card">
                <div class="card-image">
                    <a href="<?= base_url('auth/create_user') ?>">
                        <div class="text-white d-flex h-100 mask young-passion-gradient">
                            <div class="first-content align-self-center p-3">
                                <h3 class="card-title">Cadastrar novo usuário</h3>
                                <p class="lead mb-0">Clique e saiba mais</p>
                            </div>
                            <div class="second-content align-self-center mx-auto text-center">
                                <i class="fas fa-users fa-3x"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>