<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        
        /*Validacion usuarios*/

        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("jolibut") or die("no se puede conectar");
        mysql_query("insert into usuarios (id_usuarios,nombre,apellido,email,contrasenya) values
('" . $_POST['id'] . "','" . $_POST['nombre'] . "','" . $_POST['apellido'] . "','" . $_POST['ce'] . "','" . $_POST['ps1'] . "' )", $conexion) or die("no se introducen");

        print "<h2>Datos introducidos </h2><br>";
        
        mysql_close($conexion);
        ?>
    </body>
</html>
