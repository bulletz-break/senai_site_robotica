const appear_image_animtime = 400 // Tempo para ocorrer a animação
let image = new Array(6); // Posição das imagens
let image_showed = new Array(6); // Identificar se a imagem já foi mostrada
let anim_runned = new Array(6) // Identificar as animações executadas

window.onload = function() {
    // Percorrendo as imagens
    for(i=0; i < image.length; i++) {
        image[i] = document.querySelector(`#home_presentation_ilustration_image_${i+1}`).getBoundingClientRect(); // Obtendo a posição das imagens
        document.querySelector(`#home_presentation_ilustration_image_${i+1}`).style = 'opacity: 0;'; // Escondendo as imagens
    }

    // Quando o usuário rolar a página
    onscroll = function() {
        for(i=0; i < image.length; i++)
            if( window.scrollY+500 > image[i].y) // O usuário está "vendo" a imagem
                appear_image(i); // Executar animação para mostrar a imagem
    }
}

function appear_image(imageID) {
    if(image_showed[imageID+1]) // A imagem já foi mostrada
        return;
    image_showed[imageID+1] = true; // A imagem foi mostrada
    
    let anim_version = choose_version_anim(); // Sortear a animação que ocorrerá

    // Fazendo a imagem aparecer
    document.querySelector(`#home_presentation_ilustration_image_${imageID+1}`).style.animation = `appear_image_v${anim_version} ${appear_image_animtime}ms linear`; // Executando animação
    setTimeout(() => {
        document.querySelector(`#home_presentation_ilustration_image_${imageID+1}`).style = 'opacity: 1;' // Deixando a imagem visível permanentemente
    }, appear_image_animtime);
}

function choose_version_anim() {
    let anim_version = Math.floor(Math.random() * (7 - 1)) + 1; // Escolhendo valor aleatório entre 1 e 6

    if(anim_runned.indexOf(anim_version) != -1 ) // Animação já foi executada
        while(anim_runned.indexOf(anim_version) != -1) // Repetindo até escolher uma não usada ainda
            anim_version = Math.floor(Math.random() * (7 - 1)) + 1;

    anim_runned.push(anim_version); // Informando a animação usada
    return anim_version;
}
