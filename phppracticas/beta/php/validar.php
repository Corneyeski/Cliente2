<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$email = $_POST['usuario'];
$pwd = $_POST['password'];


if ($email == 'admin@admin' && $pwd == 'stucom') {
    header("Location: ../admin/admin.php");
} else {

    $pwd_encrip = crypt($pwd, "clavedeencriptacion");

    $conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
    mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
    $consulta = mysql_query("select * from usuarios where mail='" . $email . "' and contrasenya='" . $pwd_encrip . "'");
    $Result1 = mysql_fetch_row($consulta);

    if (!$Result1) {
        header("Location: ../index.php");
    } else {
        header("Location: ../inicio.php");
    }
}
?>