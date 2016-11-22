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
var url1 = "";
var url2 = "";
function iniciar() {
    //colocar();
    $(".carta").click(sendAjax);
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
               /* $("#" + cartid1).animate({"background-image": "url(fotos/ironman_III.png)"}).animate(
                        {opacity: 0},
                {duration: 1500});*/
                //$("#" + cartid1).attr("src", source);
                $("#" + cartid1).css({
                    "background-image": "url("+source+")"
                }).animate({
                    opacity: 1
                },
                {duration: 2000});
                url1 = source;
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
                 $("#" + cartid2).css({
                    "background-image": "url("+source+")"
                }).animate({
                    opacity: 1
                },
                {duration: 2000});
                url2 = source;
                comparar();
            }
        });
        //comparar();
    }
}
function comparar() {

    if (url1 != url2) {
        $("#" + cartid2).css({
                    "background-image": "url(ironman_III.png)"
                }).animate({
                    opacity: 1
                },
                {duration: 2000});
        $("#" + cartid2).css({
                    "background-image": "url(ironman_III.png)"
                }).animate({
                    opacity: 1
                },
                {duration: 2000});

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
    url1 = "";
    url2 = "";
}