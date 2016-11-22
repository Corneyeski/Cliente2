<?php
session_start();
?>

<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link href="../css/local.css" rel="stylesheet" type="text/css"/>
        <script src="../javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="../javascript/gmap3.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=ca"></script>
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
                    $consulta = mysql_query("SELECT nombre,foto,id_usuario,direccion,contrasenya FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");

                    while ($row = mysql_fetch_array($consulta)) {
                        echo $row['nombre'];
                        $id = $row['id_usuario'];
                        $foto = $row['foto'];
                        $nombre = $row['nombre'];
                        $addr['direccion'];
                        $contra = $row['contrasenya'];
                        $estilo = $row['estilo'];
                        ?>
                    </div>
                    <div>
                        <?php
                        echo "<td>", '<img src ="../' . $row["foto"] . '" width="50px" height="50px"><br>', "</td>";
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
                <li><a href="
                    <?php
                    if ($id == 0) {
                        echo "fan.php";
                    }
                    if ($id == 1) {
                        echo "local.php";
                    }
                    if ($id == 2) {
                        echo "musico.php";
                    }
                    ?>
                       ">Perfil del usuario</a></li>
            </ul>
            <img src="../img/lupa.png" alt="" id="lupa"/>
            <input type="search" name="search_string" placeholder="Buscar" id="buscar" value="">
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <div id='cssmenup'>
                    <ul>
                        <li class='active'><a href="local.php">perfil</a></li>
                        <li><a href='localca.php'>Conciertos abiertos</a></li>
                        <li><a href='localcc.php'>Conciertos cerrados</a></li>
                        <li><a href='localcr.php'>Crear concierto</a></li>
                    </ul>
                </div>
                <div>
                    <h2>Datos de tu perfil</h2>
                    <?php
                    if (!$_POST["mostrar"]) {
                        ?>
                        <div>
                            <?php
                            echo $nombre;
                            echo "<br>";
                            echo $email;
                            echo "<br>";
                            ?>
                            <div class="mapa"></div>
                            <script>
                                $(document).ready(init);
                                function init() {
                                    $('.mapa').gmap3(
                                            {map: {
                                                    options: {
                                                        zoom: 5
                                                    }
                                                },
                                                marker: {
                                                    values: [
                                                        {address: "<?php echo $addr ?>"
                                                            , data: "<h3>Titulo</h3><div><?php echo $addr ?></div>"
                                                        }
                                                    ],
                                                    //podem definir una serie de events sobre les marques
                                                    events: {
                                                        //Al clicar obrim una finestra sobre la marca i hi insertem el data de la marca
                                                        click: function (marker, event, context) {
                                                            var map = $(this).gmap3("get"), infowindow = $(this).gmap3({get: {name: "infowindow"}}); //obtenim el mapa

                                                            if (infowindow) {
                                                                infowindow.open(map, marker);   //obrim la marca
                                                                infowindow.setContent(context.data);    //dins la finestra mostrem el atribut data de la marca
                                                            } else {
                                                                $(this).gmap3({
                                                                    infowindow: {//alternativa a la acció anterior
                                                                        anchor: marker,
                                                                        options: {content: context.data}
                                                                    }
                                                                });
                                                            }
                                                        }
                                                    }
                                                }, autofit: {}
                                            }
                                    );
                                }
                            </script>
                            <img src="../<?php echo $foto ?>">
                        </div>
                        <form action="local.php"  method="post">
                            <input type="submit" value="mostrar" name="mostrar">
                        </form>
                        <?php
                    } else {
                        ?>
                        <div>
                            <form action="local.php" method="post">
                                <div>
                                    <div>
                                        <div>
                                            <label for="nombre">Nombre local:</label>
                                        </div>
                                        <div>
                                            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"  required/>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <label for="numero" min="100000000">telefono contacto:</label>
                                        </div>
                                        <div>
                                            <input type="number" name="numero" id="numero" value="<?php echo $telefono ?>"   required/>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <label for="ps1">Contraseña:</label>
                                        </div>
                                        <div>
                                            <input type="password" name="ps1" id="ps1" minlength="8" value="<?php echo $contra ?>" required/>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <label for="ps2">Contraseña de nuevo:</label>
                                        </div>
                                        <div>
                                            <input type="password" name="ps2" id="ps2" value="<?php echo $contra ?>" required/>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <label for="estilo">estilo:</label>
                                        </div>
                                        <div>
                                            <select name="estilo" id="estilo" value="<?php echo $estilo ?>" required/>
                                            <option value="rock">Rock</option>
                                            <option value="house">House</option>
                                            <option value="metal">Metal</option>
                                            <option value="jazz">Jazz</option>
                                            <option value="reggaeton">Reggaeton</option>
                                            <option value="pop">Pop</option>
                                            <option value="dubstep">Dubstep</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div>
                                        <div>
                                            <label for="direccion">Direccion:</label>
                                        </div>
                                        <div>
                                            <input type="text" name="direccion" id="direccion" value="<?php echo $addr ?>" required/>
                                        </div>
                                    </div>
                                    <br>
                                    <input type="submit" value="actualizar"/>
                                </div>
                            </form>
                        </div>
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