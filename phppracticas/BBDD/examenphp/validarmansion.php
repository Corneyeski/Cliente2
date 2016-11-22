<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();


        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("jolibut") or die("no se puede conectar");
        mysql_query("insert into viviendas (direccion,m2,precio,piscina,foto,id_actor) values
('" . $_POST['direccion'] . "','" . $_POST['m2'] . "','" . $_POST['precio'] . "','" . $_POST['piscina'] . "','" . $_POST['foto'] . "','" . $_POST['actor'] . "')", $conexion) or die("no se introducen");

        print "<h2>Datos introducidos </h2><br>";
        
        mysql_close($conexion);
        ?>
    </body>
</html>
