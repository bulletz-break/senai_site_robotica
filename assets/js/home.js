const appear_image_animtime = 400
let image = new Array(6);
let image_showed = new Array(6);

window.onload = function() {
    for(i=0; i < image.length; i++)
        image[i] = document.querySelector(`#home_presentation_ilustration_image_${i+1}`).getBoundingClientRect();

    console.log(image);

    onscroll = function() {
        for(i=0; i < image.length; i++)
            if( window.scrollY+500 > image[i].y)
                appear_image(i);
    }
}

function appear_image(imageID) {
    if(image_showed[imageID+1])
        return;
    image_showed[imageID+1] = true;
    
    let anim_version = Math.floor(Math.random() * (7 - 1)) + 1;

    document.querySelector(`#home_presentation_ilustration_image_${imageID+1}`).style.animation = `appear_image_v${anim_version} ${appear_image_animtime}ms linear`;
    setTimeout(() => {
        document.querySelector(`#home_presentation_ilustration_image_${imageID+1}`).style = 'opacity: 1;'
    }, appear_image_animtime);
}