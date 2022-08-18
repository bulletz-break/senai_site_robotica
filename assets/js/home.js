window.addEventListener('load', () => {
    // Variáveis
    let home_page_header = document.querySelector('#page_header');
    let home_page_footer = document.querySelector('#page_footer');

    $().content_load('sections/header/top_bar.html', home_page_header);

    $().content_load('sections/footer/rodape.html', home_page_footer);        
});