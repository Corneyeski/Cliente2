<?php
session_start();
$_SESSION["nombreusu"]=$_GET["nombre"];
?>
<html>
<title> RECOJO VARIABLES DE FORMULARIO GET y creo la sesión</title>
<h1> Bienvenido sr: <?php print $_SESSION["nombreusu"]; ?> </h1>
<br>
<a href="http://localhost/tercera.php"> link siguiente </a>
</html>