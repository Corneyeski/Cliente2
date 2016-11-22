$(document).ready(inici);
function inici() {
    iniciarSlider();
}

function iniciarSlider() {
    $('.your-class').slick({
        accesibility: true,
        "autoplay": true,
        "autoplaySpeed": 2000,
        "slidesToShow": 3,
        dots: true
    });
}