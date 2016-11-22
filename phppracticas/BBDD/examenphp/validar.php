<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

        /*Validacion actores*/
        
        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("jolibut") or die("no se puede conectar");
        mysql_query("insert into actores (salario,nombre,apellido,fecha_nacimiento,nacionalidad,foto,sexo) values
('" . $_POST['sueldo'] . "','" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['fn'] . "','" . $_POST['nacionalidad'] . "','" . $_POST['foto'] . "','" . $_POST['sexo'] . "' )", $conexion) or die("no se introducen");

        print "<h2>Datos introducidos </h2><br>";
        
        mysql_close($conexion);
        ?>
    </body>
</html>
