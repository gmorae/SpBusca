<div class="container">
    <div class="mt-5">
        <form method="POST" action="<?= base_url('pesquisar') ?>">
            <div class="form-row">
                <div class="col-6">
                    <input type="text" class="form-control form-control-sm my-2" name="resultado" placeholder="Buscar aqui...">
                </div>
                <div class="col">
                <button type="submit" class="btn btn-light btn-sm">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>