$(document).ready(inicio);

function inicio(){
    $("#div1").click(mostrar);
    $("#div2").click(mostrar2);
}

function mostrar(){
    $("#div2").css("display","block");
    $("#div1").css("display","none");
}
function mostrar2(){
    $("#div2").fadeOut();
    $("#div1").fadeIn();
}