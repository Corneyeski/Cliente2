<html>
    <head>
        <title> ALTA EN BASE DE DATOS </title>
    </head>
    <body>
        <?php
        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("mibase") or die("no se puede conectar");
        mysql_query("insert into tabla1 (Nombre,Apellido,Curso) values
('" . $_POST['nomalta'] . "','" . $_POST['apealta'] . "','" . $_POST['curalta'] . "')", $conexion);
        print "<h2>Datos introducidos </h2><br>";
        echo $_POST['nomalta'], "<br>", $_POST['apealta'], "<br>", $_POST['curalta'];
        ?>
        <br>
        <br>
        <br>
        <a href="http://localhost:81/db1.php"> INICIO </a><br>
        <?php
        mysql_close($conexion);
        ?>
    </body>
</html>