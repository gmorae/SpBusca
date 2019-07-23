<div class="container">
    <div class="row">
        <div class="mx-auto col-md-7 mt-5">
            <div class="card-body">
                <form method="POST">
                    <p class="h4 text-center"><?= $titulo ?></p>
                    <div class="mx-auto">
                        <?= $input ?>
                    </div>
                    <div class="text-center py-4 mt-3">
                        <button class="btn btn-red" type="submit"><?= lang('change_password_submit_btn'); ?></button>
                    </div>
            </div>
        </div>
    </div>
</div>