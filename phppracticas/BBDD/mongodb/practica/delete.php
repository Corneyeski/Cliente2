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
            <div class="altas">
                <h1>Objetos</h1>
            <?php
            $conn = new MongoClient() or die("Error al conectar con la base de datos");
            $db = $conn->selectDB('smite');
            $coll = $db->selectCollection('objetos');
            $objetos = $coll->find();

            foreach ($objetos as $objeto) {
                $id = $objeto["_id"];
                
                echo "<tr><td>" . $objeto['nombre'] . "</td>";
                echo "<td>
                    
              
              <a href='borrar.php?id=$id'>Borrar</a>
                
                </td></tr>";
                echo "<br>";
            }
            $conn->close();
            ?>
            </div>
            <div class="altas">
                <h1>Dioses</h1>
            <?php
            $conn = new MongoClient() or die("Error al conectar con la base de datos");
            $db = $conn->selectDB('smite');
            $coll = $db->selectCollection('dioses');
            $objetos = $coll->find();

            foreach ($objetos as $objeto) {
                $id = $objeto["_id"];
                echo "<tr><td>" . $objeto['nombre'] . "</td>";
                echo "<td>
                <a href='dioses/borrar.php?id=$id'>Borrar</a>
                </td></tr>";
                echo "<br>";
            }
            $conn->close();
            ?>
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>
<html>