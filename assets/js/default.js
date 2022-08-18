function $() {
    function content_load($_load_file, $_load_elmnt_replace) {
        $_cnt_load_request = new XMLHttpRequest();
        $_cnt_load_request.onloadend = content_loaded($_load_file, $_load_elmnt_replace);
        $_cnt_load_request.open('post', `../${$_file_load}`, true);
        $_cnt_load_request.send();
        return true;
    }

    function content_loaded($_cnt_loaded_request, $_loaded_elmnt_replace) {
        document.querySelector(`#${$_loaded_elmnt_replace}`).innerHTML = $_cnt_loaded_request.reponseText;
        return true;
    }

    return {
        content_load    : content_load,
        content_loaded  : content_loaded
    }
}