// Services Animations
function oil_gif() {
    document.getElementById('oil').style.backgroundImage = "url('Images/EngineOil.gif')";

}
function oil_image() {
    document.getElementById('oil').style.backgroundImage = "url('Images/EngineOilBG.PNG')";
}
function breakpad_gif() {
    document.getElementById('breaks').style.backgroundImage = "url('Images/BreakPads.gif')";
    document.getElementById('breaks').style.animationName = "services";
}
function breakpad_image() {
    document.getElementById('breaks').style.backgroundImage = "url('Images/BreakPadsBG.PNG')";
}

function slideshow(){
    let images = document.getElementsByClassName('pics');
    let i = 0;
    images[i].style.animation = 'fade-out-mid 5s linear forwards';

    // while (i < 9){
    //     images[i].style.animation = 'fade-out-mid 5s linear forwards';
    //     setTimeout(function(){
    //         i++;
    //     }, 5000);
    // }

}