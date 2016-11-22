<?php
session_start();
$conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar" .  mysql_error());
mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
$id = $_GET['id'];
$estado = $_GET['es'];
if($estado == "si") {
    $consulta = mysql_query("UPDATE concierto SET disponibilidad = 'no' WHERE '$id' = id_concierto", $conexion) or die("No se encuentran datos" . mysql_error());
} else {
     $consulta = mysql_query("UPDATE concierto SET disponibilidad = 'si' WHERE '$id' = id_concierto", $conexion) or die("No se encuentran datos" . mysql_error());
}

echo "<meta http-equiv='refresh' content='0;url=local.php'>";
?>