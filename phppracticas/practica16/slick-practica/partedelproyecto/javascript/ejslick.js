$(document).ready(inici);
function inici() {
    iniciarSlider();
}

function iniciarSlider() {
    $('.your-class').slick({
        accesibility: true,
        "autoplay": true,
        "autoplaySpeed": 3000,
        "slidesToShow": 3,
        dots: true
    });
}