(document).ready(iniciar);

function iniciar(){
    $("#sendAjax").click(sendAjax);
}
function sendAjax(){
    
    var palabra = $("#palabra").val();
    var repe = $("#repeticiones").val();
    
    $.ajax({
        Type: "POST",
        url: "ejemplo.php",
        dataType: "json",
        data: {"repe": repe,
            "palabra" : palabra},
        success : function(respJSON) {
            var txt = respJSON.palabra;
            $("#respuesta").html(txt);
        }
    });
}
