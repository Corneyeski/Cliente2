<?php
session_start();
session_unset();
?>
<html>
<title> DESCONEXION </title>
<h1> GRACIAS POR USAR NUESTRO PORTAL WEB </h1>
<br>
<a href="http://localhost/formsesion.php"> Inicio </a> <br>
</html>
<?php
header("Location:http://localhost/formsesion.php");
?>