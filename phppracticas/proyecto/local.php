<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css/menu.css" type="text/css">
        <link href="css/local.css" rel="stylesheet" type="text/css"/>
        <title>All4Music - Local</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <?php
                session_start();
                include_once '/php/conexion.php';
                    $consulta = mysql_query("SELECT nombre,foto FROM usuarios where tipo = 1", $conexion);
                ?>
                <div>FOTO</div>
                <div>USUARIO</div>
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
            <img src="img/lupa.png" alt="" id="lupa"/>
            <input type="search" name="search_string" placeholder="Buscar" id="buscar" value="">
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <div id='cssmenup'>
                    <ul>
                        <li class='active'><a href='#'>perfil</a></li>
                        <li><a href='#'>Conciertos abiertos</a></li>
                        <li><a href='#'>Conciertos cerrados</a></li>
                        <li><a href='#'>Crear concierto</a></li>
                    </ul>
                </div>
                <div>

                </div>
                <div>
                    <h1>DATOS LOCAL</h1>
                    <?php
                    
                    $consulta = mysql_query("SELECT nombre,direccion FROM usuarios where tipo = 2", $conexion);

                    echo $row['nombre'];
                    echo $row['direccion'];
                    ?>
                </div>
                <div>
                    <h2>ALTA COCIERTO</h2>
                    <form>
                        <label for="nombre"/>Nombre:<input type="text" name="nombre" id="usuario" required/>
                        <label for="fecha"/>Fecha:<input type="date" name="nombre" id="fecha" required/>
                        <br>
                        <br>
                        <input type="submit" value="actualizar"/>
                    </form>
                </div>
                <div>
                    <h2>CONCIERTOS ABIERTOS</h2>
                    <?php
                    $consulta = mysql_query("SELECT * FROM usuarios where tipo = 1", $conexion);

                    while ($row = mysql_fetch_array($consulta)) {
                        ?>
                        <table>
                            <tr> 
                                <th>nombre</th>
                                <th>fecha</th>
                                <th>estilo</th>
                                <th>telefono</th>
                                <th>correo</th>
                                <th>aceptar/rechazar</th>
                            </tr>
                            <tr>
                                <td> <?= $row['nombre'] ?> </td> 
                                <td> <?= $row['tipo'] ?> </td> 
                                <td> <?= $row['estilo'] ?> </td>
                                <td> <?= $row['telefono'] ?> </td> 
                                <td> <?= $row['correo'] ?> </td>
                                <td>
                                    <div>aceptar</div>
                                    <div>rechazar</div>
                                </td>
                            </tr> 
                        </table>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>