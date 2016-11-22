$(document).ready(inicio);

function inicio(){
    $("#fans").click(mostrar);
    $("#local").click(mostrar2);
    $("#musico").click(mostrar3);
    $("#musicos2").click(mostrar4);
    $("#locales2").click(mostrar5);
    $("#conciertos2").click(mostrar6);
    $("#ocultar").click(ocultato);
}
function mostrar(){
    $("#fans2").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar2(){
    $("#local2").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar3(){
    $("#musico2").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar4(){
    $("#musicos").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar5(){
    $("#locales").fadeIn();
    $("#ocultar").fadeIn();
}
function mostrar6(){
    $("#conciertos").fadeIn();
    $("#ocultar").fadeIn();
}
function ocultato(){
    $("#musico2").fadeOut();
    $("#fans2").fadeOut();
    $("#local2").fadeOut();
    $("#ocultar").fadeOut();
    $("#locales").fadeOut();
    $("#conciertos").fadeOut();
    $("#musicos").fadeOut();
}