<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <title>All4Music - Inicio</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="../img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="../formalta.html">Dar de alta</a></li>
                <li><a href="../buscar.php">Listar elementos</a></li>
                <li><a href="../delete.php">Eliminar elementos</a></li>
                <li><a href="../cambiar.php">editar datos</a></li>
            </ul>
        </div>
        <br>
        <div class="altas2">
            <?php
            $buscar = $_POST['buscar'];
            $conn = new MongoClient() or die("Error al conectar con la base de datos");
            $db = $conn->selectDB('smite');
            $coll = $db->selectCollection('dioses');

            $query = array("nombre" => $buscar);
            $busqueda = $coll->findOne($query);

            if (!empty($busqueda['nombre'])) {
                echo "<br>";
                echo "<h3>Nombre:</h3> " . $busqueda['nombre'] . "";
            }
            if (!empty($busqueda['tipo'])) {
                echo "<br>";
                echo "<h3>Tipo:</h3> " . $busqueda['tipo'] . "";
            }
            if (!empty($busqueda['h1'])) {
                echo "<br>";
                echo "<h2>Habilidades:</h2>";
                echo "<br>";
                echo " <h3>Primera:</h3>" . $busqueda['h1'] . "";
            }
            if (!empty($busqueda['h2'])) {
                echo "<br>";
                echo "<h3>Segunda:</h3> " . $busqueda['h2'] . " ";
            }
            if (!empty($busqueda['h3'])) {
                echo "<br>";
                echo "<h3>Tercera:</h3> " . $busqueda['h3'] . " ";
            }
            if (!empty($busqueda['h4'])) {
                echo "<br>";
                echo "<h3>Cuarta:</h3> " . $busqueda['h4'] . " ";
            }
            if (!empty($busqueda['pasiva'])) {
                echo "<br>";
                echo "<h3>cooldown:</h3> " . $busqueda['pasiva'] . " ";
            }
            ?>
        </div>
    </body>
</html>
