<?php
session_start();
?>

<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link href="../css/local.css" rel="stylesheet" type="text/css"/>
        <title>All4Music - Local</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="../img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                <?php
                $email = $_SESSION['usuario'];
                echo '<br>';
                $conexion = mysql_connect('212.48.92.208:3306', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
		mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
                $consulta = mysql_query("SELECT nombre,foto FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                
                while ($row = mysql_fetch_array($consulta)) {
                            echo $row['nombre'];
                        	
                ?>
                </div>
                <div>
                    <?php
                    echo "<td>",'<img src ="../'.$row["foto"].'" width="50px" height="50px"><br>',"</td>"; 
                    }
                    ?>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="#">Elemento 1</a></li>
                <li><a href="#">Elemento 2</a></li>
                <li><a href="#">Elemento 3</a></li>
                <li><a href="#">Elemento 4</a></li>
                <li><a href="#">Elemento 5</a></li>
            </ul>
            <img src="../img/lupa.png" alt="" id="lupa"/>
            <input type="search" name="search_string" placeholder="Buscar" id="buscar" value="">
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <div id='cssmenup'>
                    <ul>
                        <li><a href='local.php'>perfil</a></li>
                        <li><a href='localca.php'>Conciertos abiertos</a></li>
                        <li ><a href='localcc.php'>Conciertos cerrados</a></li>
                        <li class='active'><a href='localcr.php'>Crear concierto</a></li>
                    </ul>
                </div>
                <div>

                </div>
                <div>
                    <h2>ALTA COCIERTO</h2>
                    <form action="altac.php" method="post">
                        <label for="nombre"/>Nombre:<input type="text" name="nombre" id="usuario" required/>
                        <br>
                        <label for="fecha"/>Fecha:<input type="date" name="fecha" id="fecha" required/>
                        <br>
                        <label for="precio"/>Precio:<input type="number" name="precio" id="precio" required/>
                        <br>
                        <label for="duracion"/>Duracion:<input type="date" name="duracion" id="duracion" required/>
                        <br>
                        <br>
                        <input type="submit" value="actualizar"/>
                    </form>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>