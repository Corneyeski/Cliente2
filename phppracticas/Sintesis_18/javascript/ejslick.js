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
                breakpoint: 800,
                settings: {
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "infinite": true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "infinite": true
                }
            }

        ]
    });
}