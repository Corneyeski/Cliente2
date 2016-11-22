$(document).ready(iniciar);

/*var imagenes = {
 fitxa1: "fotos/Breaking_Bad_logo.svg.png"
 , fitxa2: "fotos/Doctor_Who_Logo.png"
 , fitxa3: "fotos/GOTHAM-logo"
 , fitxa4: "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png"
 , fitxa5: "fotos/vinilo decorativo lavabo juego tronos.png"
 , fitxa6: "fotos/sherlock_black.ico"
 , fitxa7: "fotos/Breaking_Bad_logo.svg.png"
 , fitxa8: "fotos/Doctor_Who_Logo.png"
 , fitxa9: "fotos/GOTHAM-logo"
 , fitxa10: "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png"
 , fitxa11: "fotos/vinilo decorativo lavabo juego tronos.png"
 , fitxa12: "fotos/sherlock_black.ico"
 }; 
 var array = []; */
var cart1 = "";
var cart2 = "";
var cartid1 = "";
var cartid2 = "";
var contador = 0;
function iniciar() {
    //colocar();
    $(".carta").click(sendAjax);
    $("#boton").click(start);
}
/*function colocar(){
 for(i = 1; i < 10; i++){
 
 do{
 var j = Math.floor((Math.random() * 12) + 1);
 var contenido = imagenes("fitxa"+ j) == "";
 }while(contenido == "");
 $("#img"+i).attr("src","contenido");
 imagenes("fitxa"+ j) = "";
 }
 } */
function sendAjax() {
    if ($(this).attr("id") == cartid1) {
        //if($("#"+cartid1.attr("src") != "")){
        alert("Esta carta no es valida");
        //}
    }
    if (cart1 == "") {
        cart1 = $(this).attr("title");
        cartid1 = $(this).attr("id");
        var source = "";
        $.ajax({
            type: "POST",
            url: "cartas.php",
            dataType: "json",
            data: {"cart1": cart1, "contador": 0},
            success: function (respuesta) {
                source = respuesta.palabra;
                $("#" + cartid1).attr("src", source);
                /* $("#" + cartid1).css({
                 "background-image": "url("+source+")"
                 }).animate({
                 opacity: 1
                 },
                 {duration: 2000}); */
            }
        });
    } else {
        cart2 = $(this).attr("title");
        cartid2 = $(this).attr("id");
        $.ajax({
            type: "POST",
            url: "cartas.php",
            dataType: "json",
            data: {"cart2": cart2, "contador": 1},
            success: function (respJSON) {
                var source = respJSON.palabra;
                $("#" + cartid2).attr("src", source);
                window.setTimeout(comparar, 500);
            }
        });
        //comparar();
    }
}
function comparar() {

    if ($("#" + cartid1).attr("src") != $("#" + cartid2).attr("src")) {
        $("#" + cartid1).attr("src", "");
        $("#" + cartid2).attr("src", "");

    } else {
        contador++;
    }
    if (contador == 6) {
        alert("HAS GANADO!");
    }
    cart1 = "";
    cart2 = "";
    cartid1 = "";
    cartid2 = "";
}
function start() {
    $.ajax({
        type: "POST",
        url: "cartas.php",
        dataType: "json",
        data: {"contador": 2}
    });
    cart1 = "";
    cart2 = "";
    cartid1 = "";
    cartid2 = "";
    contador = 0;
}