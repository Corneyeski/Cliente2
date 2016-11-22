session_start();
<?php

$email = $_SESSION['usuario'];

$conexion = mysql_connect('212.48.92.208:3306', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar" .  mysql_error());
mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
    
    $nombre = $_POST['nombre'];
    $telefono = $_POST['numero'];
    $contra = $_POST['ps1'];
    $estilo = $_POST['estilo'];
    $addr = $_POST['direccion'];
    

    $consulta = mysql_query("UPDATE usuarios "
            . "SET nombre = '$nombre', telefono = '$telefono', contrasenya = $contra, estilo = '$estilo', direccion '$direccion' WHERE '$email' = mail", $conexion) or die("No se encuentran datos");


echo "<meta http-equiv='refresh' content='1;url=local.php'>";
?>
