<?php
defined('BASEPATH') OR exit('Sem acesso direto :D');
?>

<article id="documentacao">
    <div class="d-flex align-items-stretch p-3 mb-5 row">
        <div class="d-flex">
            <section class="me-5" id="documentacao_title_container">
                <h2 class="fs-4" id="documentacao_title"> Documentacação - <?=$doc['title'];?> </h2>
            </section>
            <div>
                <a class="btn fs-5" href="<?=$doc['url'].$doc['download']?>"> Download do arquivo Word </a>
            </div>
        </div>
        <div class="pt-3">
            <p class="alert alert-warning">
                A documentação pode ficar má formatada na maioria dos navegadores, é recomendável que baixe o arquivo para um melhor leitura.
            </p>
        </div>
    </div>

    <article id="documentacao_content">
        <div class="w-100" id="documentacao_content_iframe_container" style="height: 80vh;">
            <iframe class="w-100 h-100 px-5" id="documentacao_content_iframe" src="<?=$doc['url'].$doc['file']?>">
                <h1>aoba</h1>
            </iframe>
        </div>
    </article>
</article>