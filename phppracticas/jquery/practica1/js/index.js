$(document).ready(inicio);

var move=0;

function inicio() {
    $("#divMobil").css({"background-color": "blue"});
    $("#setBlueColor").click(mobilblue);
    $("#setBlueColor").mouseenter(mobilblue2);
    $("#setRedColor").click(mobilred);
    $("#setGreenColor").mouseenter(mobilgreen);
    $("#setInvisible").click(invisible);
    $("#setVisible").click(visible);
    $("#toggleVisible").click(toggle);
    $("#incSize").click(size);
    $("#decSize").click(size2);
    $("#incRight").click(right);
    $("#decRight").click(right2);
    $("#informacioDesplegable").mouseenter(desplegable);
    $("#informacioDesplegable").mouseleave(desplegable2);
    $("#movimentContinu").click(movimiento);
}
function mobilblue() {
    $("#divMobil").css({"background-color": "blue"});
}
function mobilblue2() {
    $("#divMobil").css({"background-color": "yellow"});
}
function mobilred() {
    $("#divMobil").css({"background-color": "red"});
}
function mobilgreen() {
    $("#divMobil").css({"background-color": "green"});
}
function invisible() {
    $("#divMobil").fadeOut();
}
function visible() {
    $("#divMobil").fadeIn();
}
function toggle() {
    $("#divMobil").fadeToggle();
}
function size() {
    $("#divMobil").animate({"height": "+=50"}
    , {"duration": 1500}
    );
}
function size2() {
    $("#divMobil").animate({"height": "-=50"}
    , {"duration": 2000}
    );
}
function right() {
    $("#divMobil").animate({"width": "+=50"}
    , {"duration": 1500}
    );
}
function right2() {
    $("#divMobil").animate({"width": "-=50"}
    , {"duration": 1500}
    );
}
function desplegable() {
    $("#informacioDesplegable").animate({"height": "100%"}
    , {"duration": 1000}
    );
}
function desplegable2() {
    $("#informacioDesplegable").animate({"height": "30%"}
    , {"duration": 1000}
    );
}
function moveright() {
    $("#divMobil").animate({"left": "500"}
    , {"duration": 100
        , "complete": moveleft}
    );
    $("#divMobil").css({"background-color":"orange"});
}
function moveleft() {
    $("#divMobil").animate({"left": "-=500"}
    , {"duration": 100
        , "complete": moveright}
    );
}

function movimiento(){
    if(move == 0){
        move = 1;
        moveright();
    }
    else{
        move = 0;
        $("#divMobil").stop();
    }
}