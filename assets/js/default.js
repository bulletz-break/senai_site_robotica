let $_content_already_loaded = true;

function $() {
    // Carregar arquivo dinamicamente
    function content_load($_load_file, $_load_elmnt_replace) {
        // Esperar até que o carregamento anterior termine
        if(!$_content_already_loaded) return setTimeout(() => { content_load($_load_file, $_load_elmnt_replace); }, 0);

        $_content_already_loaded = false;
        $_cnt_load_request = new XMLHttpRequest();
        $_cnt_load_request.onloadend = () => content_loaded($_cnt_load_request, $_load_elmnt_replace);
        $_cnt_load_request.open('post', `./${$_load_file}`, true);
        $_cnt_load_request.send();
        return true;
    }

    // Tratando a resposta
    function content_loaded($_cnt_loaded_request, $_loaded_elmnt_replace = false) {
        if(!$_loaded_elmnt_replace) $_loaded_elmnt_replace = document.querySelector('#page_content');

        $_loaded_elmnt_replace.innerHTML = $_cnt_loaded_request.responseText;
        $_content_already_loaded = true;
        return true;
    }

    return {
        content_load    : content_load
    }
}

window.addEventListener('load', () => {
    // Variáveis
    let home_page_header = document.querySelector('#page_header');
    let home_page_footer = document.querySelector('#page_footer');

    // Carregando conteúdo padrão
    $().content_load('./sections/header/top_bar.html', home_page_header);
    $().content_load('sections/footer/rodape.html', home_page_footer);
    // $().content_load('equipe/organizacao-e-metodo.html');
});