<?php

session_start();


$conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar");
mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar");
mysql_query("insert into usuarios (mail,nombre,fecha_nacimiento,direccion,tipo,telefono,contrasenya,estilo,id_ciudad) values
('" . $_POST['ce'] . "','" . $_POST['nombre'] . "','" . $_POST['fn'] . "','" . $_POST['direccion'] . "',1,'" . $_POST['numero'] . "','" . $_POST['ps1'] . "','" . $_POST['estilo'] . "','" . $_POST['ciudad'] . "')", $conexion) or die("no se introducen");

mysql_close($conexion);
?>
