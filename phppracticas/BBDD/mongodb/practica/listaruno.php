<!DOCTYPE html>
<html>
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
        <br>
        <div class="altas2">
            <?php
            $buscar = $_POST['buscar'];
            $conn = new MongoClient() or die("Error al conectar con la base de datos");
            $db = $conn->selectDB('smite');
            $coll = $db->selectCollection('objetos');

            $query = array("nombre" => $buscar);
            $busqueda = $coll->findOne($query);

            if (!empty($busqueda['nombre'])) {
                echo "<br>";
                echo "<h3>nombre:</h3> " . $busqueda['nombre'] . "";
            }
            if (!empty($busqueda['tipo'])) {
                echo "<br>";
                echo "<h3>tipo:</h3> " . $busqueda['tipo'] . "";
            }
            if (!empty($busqueda['mana'])) {
                echo "<br>";
                echo " <h3>mana:</h3>" . $busqueda['mana'] . "";
            }
            if (!empty($busqueda['vela'])) {
                echo "<br>";
                echo "<h3>velocidad de ataque:</h3> " . $busqueda['vela'] . " ";
            }
            if (!empty($busqueda['velm'])) {
                echo "<br>";
                echo "<h3>velocidad movimiento:</h3> " . $busqueda['velm'] . " ";
            }
            if (!empty($busqueda['poder'])) {
                echo "<br>";
                echo "<h3>poder:</h3> " . $busqueda['poder'] . " ";
            }
            if (!empty($busqueda['cooldown'])) {
                echo "<br>";
                echo "<h3>cooldown:</h3> " . $busqueda['cooldown'] . " ";
            }
            if (!empty($busqueda['critico'])) {
                echo "<br>";
                echo "<h3>critico:</h3> " . $busqueda['critico'] . " ";
            }
            if (!empty($busqueda['penetracion'])) {
                echo "<br>";
                echo "<h3>penetracion:</h3> " . $busqueda['penetracion'] . " ";
            }
            if (!empty($busqueda['robo'])) {
                echo "<br>";
                echo " <h3>robo:</h3>" . $busqueda['robo'] . " ";
            }
            if (!empty($busqueda['salud'])) {
                echo "<br>";
                echo "<h3>salud:</h3> " . $busqueda['salud'] . " ";
            }
            if (!empty($busqueda['fisico'])) {
                echo "<br>";
                echo " <h3>fisico:</h3>" . $busqueda['fisico'] . " ";
            }
            if (!empty($busqueda['magico'])) {
                echo "<br>";
                echo " <h3>magico:</h3>" . $busqueda['magico'] . "";
            }
            ?>
        </div>
    </body>
</html>
