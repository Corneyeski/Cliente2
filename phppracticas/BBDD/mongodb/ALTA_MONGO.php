<html>
    <head>
        <title> ALTA EN BASE DE DATOS </title>
    </head>
    <body>
        <?php
        $nombre = trim($_POST['nomalta']);
        $ape = trim($_POST['apealta']);
        $curso = trim($_POST['curalta']);
        $conn = new MongoClient() or die("Error al conectar con la base de datos");
        $db = $conn->selectDB('stucom');
        /* Selecciono la coleccion */
        $coll = $db->selectCollection('alumnos');
        /* Paso los valores a $post, los valores le llegan como si fuera una matriz */
        $post = array(
            'nombre' => $nombre,
            'apellido' => $ape,
            'curso' => $curso);
        /* Inserto la 'matriz' en la coleccion */
        $coll->insert($post);
        print "<h2>Datos introducidos </h2><br>";
        $conn->close();
        ?>
    </body>
</html>