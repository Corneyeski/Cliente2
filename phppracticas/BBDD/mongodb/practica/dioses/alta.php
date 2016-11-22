<html>
    <head>
        <title> ALTA EN BASE DE DATOS </title>
    </head>
    <body>
        <?php
        $nombre = trim($_POST['nombre']);
        $tipo = trim($_POST['tipo']);
        $h1 = trim($_POST['h1']);
        $h2 = trim($_POST['h2']);
        $h3 = trim($_POST['h3']);
        $h4 = trim($_POST['h4']);
        $pasiva = trim($_POST['pasiva']);
        $conn = new MongoClient() or die("Error al conectar con la base de datos");
        $db = $conn->selectDB('smite');
        $coll = $db->selectCollection('dioses');
        $post = array(
            'nombre' => $nombre,
            'tipo' => $tipo,
            'h1' => $h1,
            'h2' => $h2,
            'h3' => $h3,
            'h4' => $h4,
            'pasiva' => $pasiva,
            );
        $coll->insert($post);
        $conn->close();
        
        echo "<meta http-equiv='refresh' content='1;url=../formalta.html'>";
        ?>
    </body>
</html>