<!doctype html>
<html lang=''>
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
        <div id="cuerpop">
        <?php
        $conn = new MongoClient() or die("Error al conectar con la base de datos");
        $db = $conn->selectDB('smite');
        $coll = $db->selectCollection('dioses');
        $objetos = $coll->find();
        echo "<h1>Dioses</h1>";
        foreach ($objetos as $objeto) {
            ?>
                <div class="altas2">
                    <?php
            if (!empty($objeto['nombre'])) {
                echo "<br>";
                echo "<h3>Nombre:</h3> " . $objeto['nombre'] . "";
            }
            if (!empty($objeto['tipo'])) {
                echo "<br>";
                echo "<h3>Tipo:</h3> " . $objeto['tipo'] . "";
            }
            echo "<h2>Habilidades:</h2>";
            if (!empty($objeto['h1'])) {
                echo "<br>";
                echo " <h3>Primera:</h3>" . $objeto['h1'] . "";
            }
            if (!empty($objeto['h2'])) {
                echo "<br>";
                echo "<h3>Segunda:</h3> " . $objeto['h2'] . " ";
            }
            if (!empty($objeto['h3'])) {
                echo "<br>";
                echo "<h3>Tercera:</h3> " . $objeto['h3'] . " ";
            }
            if (!empty($objeto['h4'])) {
                echo "<br>";
                echo "<h3>Cuarta:</h3> " . $objeto['h4'] . " ";
            }
            if (!empty($objeto['pasiva'])) {
                echo "<br>";
                echo "<h3>Pasiva:</h3> " . $objeto['pasiva'] . " ";
            }
            echo "</div>";
        }
        $conn->close();
        ?>
        </div>
    </body>
</html>