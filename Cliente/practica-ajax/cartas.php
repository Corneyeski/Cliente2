<?php

if(!isset($_SESSION["array"])){
   $_SESSION["array"] = [
    "fotos/Breaking_Bad_logo.svg.png",
    "fotos/Doctor_Who_Logo.png",
    "fotos/GOTHAM-logo.png",
    "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png",
    "fotos/vinilo decorativo lavabo juego tronos.png",
    "fotos/sherlock_black.ico",
    "fotos/Breaking_Bad_logo.svg.png",
    "fotos/Doctor_Who_Logo.png",
    "fotos/GOTHAM-logo.png",
    "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png",
    "fotos/vinilo decorativo lavabo juego tronos.png",
    "fotos/sherlock_black.ico",
];
}
if($_POST['contador'] == 2){
    shuffle($_SESSION["array"]);
    echo "exito";
} 
//NO FUNCIONA EL RANDOM, NO SE POR QUE
/* $array = [
    "fotos/Breaking_Bad_logo.svg.png",
    "fotos/Doctor_Who_Logo.png",
    "fotos/GOTHAM-logo.png",
    "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png",
    "fotos/vinilo decorativo lavabo juego tronos.png",
    "fotos/sherlock_black.ico",
    "fotos/Breaking_Bad_logo.svg.png",
    "fotos/Doctor_Who_Logo.png",
    "fotos/GOTHAM-logo.png",
    "fotos/tumblr_nyjbeuPVnn1umwwcgo1_r1_1280.png",
    "fotos/vinilo decorativo lavabo juego tronos.png",
    "fotos/sherlock_black.ico",
]; */
/* if(!$_POST['cart1']){
  $carta2 = $_POST['cart2'];
  echo '{"palabra":"' . $array($carta2) . '"}';

  }else{ */
if ($_POST['contador'] == 0) {
    $carta1 = $_POST['cart1'];

//echo '{"palabra":"' . $array($carta1) . '"}';

    $respuesta = '{"palabra":"' . $_SESSION["array"][$carta1] . '"}';
    echo $respuesta;
}
if($_POST['contador'] == 1) {
    $carta1 = $_POST['cart2'];

//echo '{"palabra":"' . $array($carta1) . '"}';

    $respuesta = '{"palabra":"' . $_SESSION["array"][$carta1] . '"}';
    echo $respuesta;
}
// }

/*if (!$_POST['cart2']) {
    $carta1 = $_POST['cart1'];

    //echo '{"palabra":"' . $array($carta1) . '"}';

    $respuesta = '{"palabra":"' . $array[$carta1] . '"}';
    echo $respuesta;
} else {
    $carta = $_POST['cart2'];

    //echo '{"palabra":"' . $array($carta1) . '"}';

    $respuesta = '{"palabra":"' . $array[$carta] . '"}';
    echo $respuesta;
} */

/*$carta1 = $_POST['cart1'];

$respuesta = '{"palabra":"' . $array[$carta1] . '"}';
echo $respuesta; */