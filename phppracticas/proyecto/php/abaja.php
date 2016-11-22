<html>
    <head>
        <title>BAJA EN BASE DE DATOS</title>
    </head>
    <body>
        <?php
        $conexion = new mysqli("localhost", "hgkbzorb_alan", "1Hermano?","hgkbzorb_all4music") or die("no se puede conectar");
        $consulta = $conexion->query("delete from usuarios where mail='" . $_POST['ce'] . "'");
        $conexion->close()
        ?>
        <h1> BAJA PROCESADA </h1><br>
        <a href="admin.php"> INICIO </a>
    </body>
</html>
