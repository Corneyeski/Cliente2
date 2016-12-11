$(document).ready(start);
var source = 0;
var lista;
var nave = $("<img src='2iozev.png' id='subject'/>");
var points = 0;
var interval;
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
            
        }
    });
}
function start2() {

    $("#puntos").fadeOut();
    $("#fondo").fadeIn(5000);
    $("#hud").fadeIn(5000);
    $("#espai").fadeIn(5000);

    $(document).keydown(function (a) {
        switch (a.which) {

            //s
            case 87:
                nave.stop().animate({
                    top: '-=100'
                });
                break;
                //w
            case 83:
                nave.stop().animate({
                    top: '+=100'
                });
                break;
                //a
            case 65:
                nave.stop().animate({
                    left: '-=100'
                });
                break;
                //d
            case 68:
                nave.stop().animate({
                    left: '+=100'
                });
                break;
        }
    });
    time();
}
function time(){
    
    interval= window.setInterval(meteoro,2000);
}
function meteoro(){
    
    var meteorito = $("<img src='Tie-Fighter-01-icon.png' class='enemy'/>");
    $("#espai").append(meteorito);
    var dis = $("#espai").width() - meteorito.width();
    var top;
    $.ajax({
        type: "POST",
        url: "espacio.php",
        dataType: "json",
        data: {"max": $("#espai").height() - meteorito.height()},
        success: function (respuesta) {
            top = respuesta.random;
            //console.log(respuesta.random);
            console.log(top);
            meteorito.css({"left":dis,"top" : top+"px"});
    
    meteorito.animate({
        left : '0'
        },{
        duration: 4000,
        step: function (now, fx) {
                            //puntuacion
                            $("#points").html(points);
                            //comprobar colision
                            if ($(meteorito).hittest($(nave))) {
                                meteorito.remove();
                                $("#salud").animate({
                                    "width": "-=20"
                                },
                                        {
                                            step: function (now, fx) {
                                                if ($("#salud").width() < 5) {
                                                    clearInterval(interval);
                                                    nave.stop();
                                                    window.clearInterval(interval);
                                                    $("#gameOver").fadeIn(5000);
                                                    $("#espai").fadeOut();
                                                    $("#hud").fadeOut();
                                                    final();
                                                }
                                            }
                                        });
                            }
                        },
        complete : function(){
            points++;
            meteorito.remove();
        }
        
    });
        }
    });
}
function final(){
    
}