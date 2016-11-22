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
        $email = $_POST['usuario'];
        $pwd = $_POST['password'];

        $conexion = mysql_connect('localhost', 'root', '') or die("no se puede conectar");
        mysql_select_db('jolibut') or die("no se puede conectar");
        $consulta = mysql_query("select * from usuarios where id_usuarios='" . $email . "' and contrasenya='" . $pwd . "'");
        $Result1 = mysql_fetch_row($consulta);
        
        if (!$Result1) {
            echo "usuario incorrecto";
        } else {
            echo "HAS TRIUNFADO!!!! Usuario Correcto!!!!!";
        }
        ?>
    </body>
</html>
