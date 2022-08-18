let $_content_already_loaded = true;

function $() {

    function content_load($_load_file, $_load_elmnt_replace) {
        // Esperar até que o carregamento anterior termine
        if(!$_content_already_loaded) return setTimeout(() => { content_load($_load_file, $_load_elmnt_replace); }, 0);

        $_content_already_loaded = false;
        $_cnt_load_request = new XMLHttpRequest();
        $_cnt_load_request.onloadend = () => content_loaded($_cnt_load_request, $_load_elmnt_replace);
        $_cnt_load_request.open('post', `../${$_load_file}`, true);
        $_cnt_load_request.send();
        return true;
    }

    function content_loaded($_cnt_loaded_request, $_loaded_elmnt_replace) {
        console.log($_cnt_loaded_request);
        $_loaded_elmnt_replace.innerHTML = $_cnt_loaded_request.responseText;
        $_content_already_loaded = true;
        return true;
    }

    return {
        content_load    : content_load
    }
}