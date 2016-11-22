<html>
    <head>
        <title>BAJA EN BASE DE DATOS</title>
    </head>
    <body>
        <?php
        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("mibase") or die("no se puede conectar");
        $stringsql = "delete from tabla1 where Nombre='" . $_POST['nombaja'] . "' and
        Apellido='" . $_POST['apebaja'] . "'";
        mysql_query($stringsql, $conexion);
        mysql_close($conexion);
        ?>
        <h1> BAJA PROCESADA </h1> <br>
        <a href="http://localhost:81/db1.php"> INICIO </a>
    </body>
</html>