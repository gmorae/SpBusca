<div class="container">
    <section class="my-5">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Fale conosco</h2>
        <p class="text-center w-responsive mx-auto">Olá, envia-nos uma mensagem de duvida ou de contato, entraremos em contoto dentro de 24 horas</p>
        <div class="text-center text-md-center mb-5">
            <?php
                $telefone1 = '1000' or '1';
            ?>
            <a href="https://wa.me/5511<?= $telefone1 ?>text=Olá, gostaria de mais informações?">    
                <button class="btn green accent-4" type="button">Para mais informações<i class="fab fa-whatsapp ml-2"></i></button>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12 mb-md-0 mb-5">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="nome" name="nome" class="form-control">
                                <label for="nome" class="">Nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control">
                                <label for="email" class="">E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="assunto" name="assunto" class="form-control">
                                <label for="assunto" class="">Assunto</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea id="mensagem" name="mensagem" class="form-control md-textarea" rows="3"></textarea>
                                <label for="mensagem">Mensagem</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center text-md-left">
                    <button class="btn red accent-4" type="submit">Enviar</button>
                </div>
            </div>
        </div>
    </section>
</div>