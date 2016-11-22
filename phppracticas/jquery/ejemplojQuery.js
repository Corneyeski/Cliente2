$(document).ready(inicio);

function inicio() {
    $("#div1").click(oculta1Show2);
    $("#div2").click(oculta2Show1);
    $("#div1").mouseenter(ampliaDiv1);
    $("#div1").mouseleave(reduceDiv1);
}
function reduceDiv1() {
    $("#div1").stop();
    $("#div1").animate({"width": "50px"}
    , {"duration": 2000}
    );
}
function ampliaDiv1() {
    $("#div1").stop();
    $("#div1").animate({"width": "300px"}
    , {"duration": 2000}
    );

}
function oculta2Show1() {
    $("#div2").fadeOut(3000);
    $("#div1").fadeIn(3000);
}
function oculta1Show2() {
    $("#div1").css("display", "none");
    $("#div2").css(
            {"display": "block"
                , "background-color": "red"}
    );
}