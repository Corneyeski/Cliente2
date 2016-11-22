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
            <h2>Objetos</h2>
            <div class="divs">
                <a href="updatea.php">
                    <br>
                    <br>
                    Mostrar todo</a>
            </div>
            <div class="divs">
                <form action="update.php" method="post">
                <label for="buscar">Buscar por nombre:</label>
                <br>
                <input type="text" id="buscar" name="buscar">
                <br>
                <input type="submit">
            </form> 
            </div>
            <h2>Dioses</h2>
            <div class="divs">
                <a href="dioses/updatea.php">
                    <br>
                    <br>
                    Mostrar todo</a>
            </div>
            <div class="divs">
                <form action="dioses/update.php" method="post">
                <label for="buscar">Buscar por nombre:</label>
                <br>
                <input type="text" id="buscar" name="buscar">
                <br>
                <input type="submit">
            </form> 
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>