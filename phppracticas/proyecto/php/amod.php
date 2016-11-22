<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexion = new mysqli("localhost", "hgkbzorb_alan", "1Hermano?","hgkbzorb_all4music") or die("no se puede conectar");
        $consulta = $conexion->query("delete from usuarios where mail='" . $_POST['ce'] . "'");
        mysql_query("insert into usuarios (mail,nombre,apellido,fecha_nacimiento,direccion,tipo,telefono,contrasenya,estilo,id_ciudad) values
        ('" . $_POST['ce'] . "','" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['fn'] . "','" . $_POST['direccion'] . "','" . $_POST['tipo'] . "','" . $_POST['numero'] . "','" . $_POST['ps1'] . "','" . $_POST['estilo'] . "','" . $_POST['ciudad'] . "')", $conexion) or die("no se introducen");
        
        mysql_close($conexion);
        ?> 
        <h1> MODIFICACION COMPLETA </h1><br>
        <a href="admin.php"> INICIO </a>
         
        
    </body>
</html>
