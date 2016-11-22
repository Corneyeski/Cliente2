<?php
session_start();
?>
<html>
<title> USO el objeto SESION</title>
<h1> Bienvenido sr: <?php print $_SESSION["nombreusu"]; ?> </h1>
<br>
<a href="http://localhost/formsesion.php"> link anterior </a> <br>
<a href="http://localhost/discon.php"> Desconecta </a>
</html>