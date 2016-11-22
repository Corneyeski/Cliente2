$(document).ready(inici);
function inici() {
    iniciarSlider();
}

function iniciarSlider() {
    $('#slicks').slick({
        accesibility: true,
        "autoplay": true,
        "autoplaySpeed": 2000,
        "slidesToShow": 4,
        dots: true,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    "slidesToShow": 2,
                    "slidesToScroll": 1,
                    "infinite": true,
                     accesibility: true,
                    "autoplay": false
                }
            }
        ]
    });
}