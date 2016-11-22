$(document).ready(inici);
function inici() {
    iniciarSlider();
}

function iniciarSlider() {
    $('.slider').slick({
        accesibility: true,
        "autoplay": true,
        "autoplaySpeed": 2000,
        "slidesToShow": 2,
        dots: true
    });
    $('#responsive').slick({
        accesibility: true,
        "autoplay": true,
        "autoplaySpeed": 2000,
        "slidesToShow": 4,
        dots: true,
        responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 850,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
    });
}