<div class="container">
    <section class="my-5">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Fale conosco</h2>
        <p class="text-center w-responsive mx-auto">Olá, envia-nos uma mensagem de duvida ou de contato, entraremos em contoto dentro de 24 horas</p>
        <div class="text-center text-md-center mb-5">
            <button class="btn green accent-4" data-toggle="modal" data-target="#whatsapp" type="button">Para mais informações<i class="fab fa-whatsapp ml-2"></i></button>
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
<div class="modal fade" id="whatsapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
        <div class="modal-content text-center">
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">WhatsaApp<i class="fab fa-whatsapp ml-2 fa-1x animated rotateIn white-text"></i></p>
            </div>
            <div class="modal-body">

                <p class="text-center">Escolha um número para entrar em contato<br></p>
            </div>
            <div class="flex-center">
                <a href="https://wa.me/5511949970853?text=Olá." class="btn btn-success waves-effect">Atendimento 1 <i class="fas fa-angle-double-right ml-2"></i></a>
            </div>
            <div class="flex-center mb-3">
                <a href="https://wa.me/5511994010204?text=Olá." class="btn btn-success waves-effect">Atendimento 2<i class="fas fa-angle-double-right ml-2"></i></a>
            </div>

        </div>
    </div>
</div>