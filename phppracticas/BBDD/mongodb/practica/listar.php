<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css/menu.css" type="text/css">
        <title>All4Music - Inicio</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="formalta.html">Dar de alta</a></li>
                <li><a href="buscar.php">Listar elementos</a></li>
                <li><a href="delete.php">Eliminar elementos</a></li>
                <li><a href="cambiar.php">editar datos</a></li>
            </ul>
        </div>
        <div id="cuerpop">
            <?php
            $conn = new MongoClient() or die("Error al conectar con la base de datos");
            $db = $conn->selectDB('smite');
            $coll = $db->selectCollection('objetos');
            $objetos = $coll->find();
            echo "<h1>objetos</h1>";
            echo "<div id='centro'>";
            foreach ($objetos as $objeto) {
                ?>
                <div class="altas2">
                    <?php
                    if (!empty($objeto['nombre'])) {
                        echo "<br>";
                        echo "<h3>nombre:</h3> " . $objeto['nombre'] . "";
                    }
                    if (!empty($objeto['tipo'])) {
                        echo "<br>";
                        echo "<h3>tipo:</h3> " . $objeto['tipo'] . "";
                    }
                    if (!empty($objeto['mana'])) {
                        echo "<br>";
                        echo " <h3>mana:</h3>" . $objeto['mana'] . "";
                    }
                    if (!empty($objeto['vela'])) {
                        echo "<br>";
                        echo "<h3>velocidad de ataque:</h3> " . $objeto['vela'] . " ";
                    }
                    if (!empty($objeto['velm'])) {
                        echo "<br>";
                        echo "<h3>velocidad movimiento:</h3> " . $objeto['velm'] . " ";
                    }
                    if (!empty($objeto['poder'])) {
                        echo "<br>";
                        echo "<h3>poder:</h3> " . $objeto['poder'] . " ";
                    }
                    if (!empty($objeto['cooldown'])) {
                        echo "<br>";
                        echo "<h3>cooldown:</h3> " . $objeto['cooldown'] . " ";
                    }
                    if (!empty($objeto['critico'])) {
                        echo "<br>";
                        echo "<h3>critico:</h3> " . $objeto['critico'] . " ";
                    }
                    if (!empty($objeto['penetracion'])) {
                        echo "<br>";
                        echo "<h3>penetracion:</h3> " . $objeto['penetracion'] . " ";
                    }
                    if (!empty($objeto['robo'])) {
                        echo "<br>";
                        echo " <h3>robo:</h3>" . $objeto['robo'] . " ";
                    }
                    if (!empty($objeto['salud'])) {
                        echo "<br>";
                        echo "<h3>salud:</h3> " . $objeto['salud'] . " ";
                    }
                    if (!empty($objeto['fisico'])) {
                        echo "<br>";
                        echo " <h3>fisico:</h3>" . $objeto['fisico'] . " ";
                    }
                    if (!empty($objeto['magico'])) {
                        echo "<br>";
                        echo " <h3>magico:</h3>" . $objeto['magico'] . "";
                    }
                    echo "</div>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </body>
</html>