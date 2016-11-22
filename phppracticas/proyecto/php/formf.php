<?php

session_start();


$conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar");
mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar");
mysql_query("insert into usuarios (mail,nombre,apellido,fecha_nacimiento,tipo,contrasenya,id_ciudad) values
('" . $_POST['ce'] . "','" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['fn'] . "',0,'" . $_POST['ps1'] . "','" . $_POST['ciudad'] . "' )",$conexion) or die("no se introducen");

print "<h2>Datos introducidos </h2><br>";

mysql_close($conexion);
?>
