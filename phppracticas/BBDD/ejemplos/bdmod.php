<html>
    <head>
        <title> CONEXION A BASE DE DATOS Y MODIFICA TABLA </title>
    </head>
    <body>
        <?php
        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
        mysql_select_db("mibase") or die("no se puede conectar");
        $stringsql = "update tabla1 set Apellido='" . $_POST['apemod'] . "', Curso='" . $_POST['curmod'] . "' where
        Nombre='" . $_POST['nommod'] . "'";
        mysql_query($stringsql, $conexion);
        ?>
        <br>
        <h1> Datos modificados: </h1>
        <?php
        echo $_POST['nommod'], "<br>", $_POST['apemod'], "<br>", $_POST['curmod'];
        ?>
        <br>
        <br>
        <a href="http://localhost:81/db1.php"> INICIO </a><br>
        <?php
        mysql_close($conexion);
        ?>
        </body>
        </html>