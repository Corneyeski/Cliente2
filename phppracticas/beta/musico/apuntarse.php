
<?php

session_start();

$idc = $_GET['idc'];
$id = $_GET['id'];

$conexion = mysql_connect('212.48.92.208:3306', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
mysql_query("insert into apunta (id_concierto,id_grupo) values
($idc,$id)",$conexion) or die("no se introducen");
?>
