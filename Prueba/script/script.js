$(document).ready(init);

var ship = $("<img src='img/rocket.png'/>");
var interval;
var points = 0;

function init() {
    ship.css("position", "absolute");
    $("#map").append(ship);
    
    $(document).keydown(function (e) {
        switch (e.which) {
            case 37:
                ship.stop().animate({
                    left: '-=30'
                }); //left arrow key
                break;
            case 38:
                ship.stop().animate({
                    top: '-=30'
                }); //up arrow key
                break;
            case 39:
                ship.stop().animate({
                    left: '+=30'
                }); //right arrow key
                break;
            case 40:
                ship.stop().animate({
                    top: '+=30'
                }); //bottom arrow key
                break;
            case 87:
                ship.stop().animate({
                    top: '-=30'
                }); //w key
                break;
            case 65:
                ship.stop().animate({
                    left: '-=30'
                });//a key
                break;
            case 83:
                ship.stop().animate({
                    top: '+=30'
                }); //s key
                break;
            case 68:
                ship.stop().animate({
                    left: '+=30'
                });//d key
                break;
        }
    });
}