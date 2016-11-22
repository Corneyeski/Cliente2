<?php

$email = $_SESSION['usuario'];
$valor = $_GET['v'];
echo '<br>';
$conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
$consulta = mysql_query("SELECT id_usuario FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");

while ($row = mysql_fetch_array($consulta)) {
    $id = $row['id_usuario'];
}
if ($_GET['idc']) {
    $idc = $_GET['idc'];
    $consulta = mysql_query("SELECT * FROM votar_fans WHERE '$id' = id_fan and '$idc' = id_concierto", $conexion);

    if (!$consulta) {
        mysql_query("insert into votar_fans(id_fan,id_concierto,puntos) values
      ($id,$idc,$valor )", $conexion) or die("no se introducen");

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    } else {
        $consulta = mysql_query("UPDATE votar_fans "
                . "SET puntos = '$valor' WHERE '$id' = id_fan and '$idc' = id_concierto", $conexion) or die("No se encuentran datos" . mysql_error());

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    }
}
if ($_GET['idm']) {
    $idm = $_GET['idm'];
    $consulta = mysql_query("SELECT * FROM votar_grupos WHERE '$id' = id_fan and '$idm' = id_local", $conexion);

    if (!$consulta) {
        mysql_query("insert into votar_grupos(id_fan,id_local,puntos) values
      ($id,$idm,$valor )", $conexion) or die("no se introducen");

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    } else {
        $consulta = mysql_query("UPDATE votar_grupos "
                . "SET puntos = '$valor' WHERE '$id' = id_fan and '$idm' = id_local", $conexion) or die("No se encuentran datos" . mysql_error());

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    }
}
if ($_GET['idl']) {
    $idl = $_GET['idl'];
    $consulta = mysql_query("SELECT * FROM votar_local WHERE '$id' = id_fan and '$idl' = id_local", $conexion);

    if (!$consulta) {
        mysql_query("insert into votar_local(id_fan,id_local,puntos) values
      ($id,$idl,$valor )", $conexion) or die("no se introducen");

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    } else {
        $consulta = mysql_query("UPDATE votar_local "
                . "SET puntos = '$valor' WHERE '$id' = id_fan and '$idl' = id_local", $conexion) or die("No se encuentran datos" . mysql_error());

        echo "<meta http-equiv='refresh' content='1;url=../votacion.php'>";
    }
}
?>