<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css/menu.css" type="text/css">
        <title>All4Music - Inicio</title>
    </head>    <body>
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
            <div class="altas">
                <?php
                $conn = new MongoClient() or die("Error al conectar con la base de datos");
                $db = $conn->selectDB('smite');
                $coll = $db->selectCollection('objetos');
                $objetos = $coll->find();


                foreach ($objetos as $objeto) {
                    $id = $objeto["_id"];
                    echo "<tr><td>" . $objeto['nombre'] . "</td>";
                    echo "<td>
                <a href='editar.php?id=$id'>Editar</a>
                </td></tr>";
                    echo "<br>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </body>
</html>