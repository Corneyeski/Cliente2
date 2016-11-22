<?php

session_start();

$pwd = $_POST['ps1'];
$pwd_encrip=crypt($pwd,"clavedeencriptacion");

$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="foto/".$foto;
$destino2="foto/".$foto;
echo '<br>';
echo '<br>';
echo $destino;
echo '<br>';
echo '<br>';
echo $destino2;
echo '<br>';
echo '<br>';
copy($ruta,$destino);

$conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar");
mysql_query("insert into usuarios (mail,nombre,fecha_nacimiento,tipo,contrasenya,estilo,id_ciudad,foto) values
('" . $_POST['ce'] . "','" . $_POST['nombre'] . "','" . $_POST['fn'] . "',2,'$pwd_encrip','" . $_POST['estilo'] . "','" . $_POST['ciudad'] . "','$destino')",$conexion) or die("no se introducen");

print "<h2>Datos introducidos </h2><br>";

mysql_close($conexion);
?>