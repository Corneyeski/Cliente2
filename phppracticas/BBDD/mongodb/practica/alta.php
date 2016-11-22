<html>
    <head>
        <title> ALTA EN BASE DE DATOS </title>
    </head>
    <body>
        <?php
        $nombre = trim($_POST['nombre']);
        $tipo = trim($_POST['tipo']);
        $mana = trim($_POST['mana']);
        $vela = trim($_POST['vela']);
        $velm = trim($_POST['velm']);
        $poder = trim($_POST['poder']);
        $cooldown = trim($_POST['cooldown']);
        $critico = trim($_POST['critico']);
        $penetracion = trim($_POST['penetracion']);
        $robo = trim($_POST['robo']);
        $salud = trim($_POST['salud']);
        $fisico = trim($_POST['fisico']);
        $magico = trim($_POST['magico']);
        $conn = new MongoClient() or die("Error al conectar con la base de datos");
        $db = $conn->selectDB('smite');
        $coll = $db->selectCollection('objetos');
        $post = array(
            'nombre' => $nombre,
            'tipo' => $tipo,
            'mana' => $mana,
            'vela' => $vela,
            'velm' => $velm,
            'poder' => $poder,
            'cooldown' => $cooldown,
            'critico' => $critico,
            'penetracion' => $penetracion,
            'robo' => $robo,
            'salud' => $salud,
            'fisico' => $fisico,
            'magico' => $magico,
            );
        $coll->insert($post);
        $conn->close();
        
        echo "<meta http-equiv='refresh' content='1;url=formalta.html'>";
        ?>
    </body>
</html>