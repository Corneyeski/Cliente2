$(document).ready(inicio);

function inicio() {
    $("#lateral").mouseenter(desplegable);
    $("#lateral").mouseleave(desplegable2);
}

function desplegable() {
    $("#lateral").animate({"margin-left": "3%"}
    );
    $("#lateral").animate({"width": "100px"}
    , {"duration": 2000}
    );
}
function desplegable2() {
    $("#lateral").animate({"width": "50px"}
    , {"duration": 4000}
    );
    $("#lateral").animate({"margin-left": "9%"}
    );
}

