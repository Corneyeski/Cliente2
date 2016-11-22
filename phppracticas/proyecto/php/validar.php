<?php

$email = $_POST['usuario'];
$pwd = $_POST['password'];

$conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
$consulta = mysql_query("select * from usuarios where mail='" . $email . "' and contrasenya='" . $pwd . "'");
$Result1 = mysql_fetch_row($consulta);
if ($email == 'admin@admin' && $pwd == 'stucom') {
    header("Location: ../html/admin.html");
}
if (!$Result1) { /* si el resultado de la query es negativa manda un mensaje de alerta */
    echo "usuario incorrecto";
    header("Location: ../index.php");
} else {
    echo "HAS TRIUNFADO!!!! Usuario Correcto!!!!!";
}
?>
  