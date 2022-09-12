<article class="p-0 bg-white" id="equipe_org_e_met">
    <section class="py-3 ps-5 bg-dark">
        <h1 class="fs-3 ps-5 text-light"> <?=$equipe['titulo'];?> </h1>
    </section>
        <!-- Integrantes da equipe -->
    <div>
        <div class="d-flex flex-column justify-content-around w-100">
            <div class="d-inline-flex justify-content-around py-5">
                <div class="d-flex col-4 py-3 justify-content-center rounded bg-light" style="cursor: default;">
                    <div class="modal fade" id="expand_photo_arthur" tabindex="-1" style="display: none;">
                        <div class="modal-body modal-dialog modal-dialog-centered rounded" style="background-image: url(<?=base_url('assets/imagens/arthur.jpeg');?>); background-position: center 15%; height: 80vh;"></div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <!-- Imagem do integrante -->
                        <div class="d-flex justify-content-center">
                            <a class="rounded-circle equipe_album_photo modal-dialog-centered" style="background-image: url(<?=base_url('assets/imagens/arthur.jpeg');?>); background-position: center 15%;" data-bs-toggle="modal" data-bs-target="#expand_photo_arthur" role="button"></a>
                        </div>
                        <!-- Conteúdo sobre o integrante -->
                        <div class="pt-3 d-flex justify-content-center flex-column">
                            <!-- Nome do integrante -->
                            <div class="d-flex justify-content-center p-0">
                                <h2 style="font-family: 'Roboto';"> Ana Clara Pacheco </h2>
                            </div>
                            <!-- Apresentação do integrante -->
                            <div class="d-flex justify-content-center px-5">
                                <p class="fs-5" style="text-align: justify;">
                                    Ana Clara Pacheco dos Ramos, 19 anos. <br/>
                                    Formação: Operador de Suporte Técnico em Tecnologia da Informação <br/>
                                    Empresa: Petrobrás
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>