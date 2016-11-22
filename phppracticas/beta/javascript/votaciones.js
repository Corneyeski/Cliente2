$(document).ready(inicio);

function inicio(){
    $("#conciertos").click(mostrar);
    $("#locales").click(mostrar2);
    $("#musicos").click(mostrar3);
    $("#ocultar").click(ocultato);
}
function mostrar(){
    $("#conciertos2").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar2(){
    $("#locales2").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar3(){
    $("#musicos2").fadeIn();
    $("#ocultar").fadeIn();
}
function ocultato(){
    $("#musicos2").fadeOut();
    $("#conciertos2").fadeOut();
    $("#locales2").fadeOut();
    $("#ocultar").fadeOut();
}