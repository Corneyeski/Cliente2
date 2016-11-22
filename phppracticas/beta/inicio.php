<?php
session_start();
?>
<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css/menu.css" type="text/css">
        <link href="css/inicio.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="javascript/ejslick.js" type="text/javascript"></script>
        <title>All4Music - Inicio</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                    <?php
                    $email = $_SESSION['usuario'];
                    echo '<br>';
                    $conexion = mysql_connect('212.48.92.208:3306', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
                    mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
                    $consulta = mysql_query("SELECT nombre,foto,id_usuario FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");

                    while ($row = mysql_fetch_array($consulta)) {
                        echo $row['nombre'];
                        $id = $row['id_usuario'];
                        ?>
                    </div>
                    <div>
                        <?php
                        echo "<td>", '<img src ="' . $row["foto"] . '" width="50px" height="50px"><br>', "</td>";
                    }
                    ?>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="php/mapas.php">Buscar en el mapa</a></li>
                <li><a href="#">Elemento 2</a></li>
                <li><a href="#">Elemento 3</a></li>
                <li><a href='<?php
                       if($tipo == 0){
                           ?>
                           votar.php'>Vota lo que mas te guste</a>
                    <?php
                       } else{
                       ?>
                           #'>Esta opcion no es apra ti</a>
                           <?php
                       }
                       ?>
                       </li>
                <li><a href="
                <?php
                if($id == 0){
                    echo "fan/fan.php";
                }
                if($id == 1){
                    echo "local/local.php";
                }
                if($id == 2){
                    echo "musico/musico.php";
                }
                ?>
                ">Perfil del usuario</a></li>
            </ul>
            <form action="buscar.php" method="post">
            <label for="buscar"><img src="img/lupa.png" alt="" id="lupa"/></label>
            <input type="search" name="search_string" placeholder="Buscar" id="buscar" nombre="buscar">
            <?php
            //$_SESSION['buscar'] = $_POST['buscar'];
            ?>
            </form>
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <h2>Proximos Conciertos</h2>
                <div class="your-class">
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                </div>
                <h2>Algunos Grupos</h2>
                <div class="your-class">
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                </div>
                <h2>Los mejores locales</h2>
                <div class="your-class">
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                    <div class="borde">
                        <img src="img/Alan.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>