$(document).ready(start);
var source = 0;
var lista;
var nave = $("<img src='2iozev.png' id='subject'/>");
function start() {
    $("#boton").click(nombre);
    $("#start").click(start2);
    $("#espai").append(nave);
}
function nombre() {

    var nombre = $("#nombre").val();
    $.ajax({
        type: "POST",
        url: "espacio.php",
        dataType: "json",
        data: {"nombre": nombre, "puntuacion": 0},
        success: function (respuesta) {
            source = respuesta.posicion;
            puntos();
        }

    });
}
function puntos() {

    $.ajax({
        type: "POST",
        url: "espacio.php",
        dataType: "json",
        data: {"lista": "lista"},
        success: function (respuesta) {
            // lista = JSON.parse(respuesta);
            //console.log( array);
            //    usuarios();
            console.log(respuesta.jug);

            var elem = "<ul>";
            for (var nombre in respuesta.jug) {

                elem += "<li>Nombre: " + respuesta.jug[nombre].nombre + " - Puntos: " + respuesta.jug[nombre].puntos + "</li>";
            }
            elem += "</ul>";
            console.log(elem);
            $("#tabla").prepend(elem);
            $("#start").fadeIn();
            $("#fondo").fadeIn();
        }
    });
}
function start2() {

    $("#puntos").fadeOut();
    $("#espai").fadeIn(5000);

    $(document).keydown(function (a) {
        switch (a.wich) {

            //s
            case 87:
                nave.stop().animate({
                    top: '-=50'
                });
                alert.log("w");
                break;
                //w
            case 83:
                nave.stop().animate({
                    top: '+=50'
                });
                break;
                //a
            case 65:
                nave.stop().animate({
                    left: '-=50'
                });
                break;
                //d
            case 68:
                nave.stop().animate({
                    left: '+=50'
                });
                break;
        }
    });
}
