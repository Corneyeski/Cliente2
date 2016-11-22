<?php
session_start();
?>

<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="/css/menu.css" type="text/css">
        <link href="/css/votacion.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="javascript/votacion.js" type="text/javascript"></script>
        <title>All4Music - Votacion</title>
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
                    $conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
                    mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
                    $consulta = mysql_query("SELECT * FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");

                    while ($row = mysql_fetch_array($consulta)) {
                        echo $row['nombre'];
                        $id = $row['id_usuario'];
                        $foto = $row['foto'];
                        $nombre = $row['nombre'];
                        $addr = $row['direccion'];
                        $pwd = $row['contrasenya'];
                        $tipo = $row['tipo'];
                        //$contra = decrypt($pwd,"clavedeencriptacion");

                        $telefono = $row['telefono'];
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
                <li><a href="inicio.php">Home of the brave</a></li>
                <li><a href="#">Elemento 2</a></li>
                <li><a href="#">Elemento 3</a></li>
                <li><a href="#">Elemento 4</a></li>
                <li><a href="
                    <?php
                    if ($tipo == 0) {
                        echo "fan.php";
                    }
                    if ($tipo == 1) {
                        echo "local.php";
                    }
                    if ($tipo == 2) {
                        echo "musico.php";
                    }
                    ?>
                       ">Perfil del usuario</a></li>
            </ul>
            <form action="buscar.php" method="post">
                <label for="buscar"><img src="img/lupa.png" alt="" id="lupa"/></label>
                <input type="search" name="buscar" placeholder="Buscar" id="buscar">
                <?php
                //$_SESSION[buscar'] = $_POST['buscar'];
                ?>
            </form>
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <div class="botones" id="conciertos">Votar conciertos</div>
                <div class="botones" id="musicos">Votar musicos</div>
                <div class="botones" id="locales">Votar locales</div>
                <div id="ocultar"></div>
                <div class="oculto" id="conciertos2">
                    <h2>Conciertos</h2>
                    <?php
                    $consulta = mysql_query("SELECT * FROM concierto WHERE disponibilidad = 'no'", $conexion) or die("No se encuentran datos");
                    $consulta2 = mysql_query("SELECT * FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                    while ($row = mysql_fetch_array($consulta2)) {
                        
                    }
                    while ($row = mysql_fetch_array($consulta)) {
                        $idc = $row['id_concierto'];
                        $estado = $row['disponibilidad'];
                        ?>
                        <div id="conciertosa">
                            <h3><?php echo $row['nombre'] ?></h3>
                            <div>
                                <b>Fecha:</b> <?php echo $row['fecha'] ?>
                                <br>
                                <b>precio:</b> <?php echo $row['precio'] ?>€
                                <br>
                                <b>duracion:</b> <?php echo $row['duracion'] ?>min
                                <br>
                            </div>
                            <div class="votaciones">
                                <?php
                                echo "<a class='votar' href='php/votar.php?idc=$idc&v=1'>1</a>"
                                . "<a class='votar' href='php/votar.php?idc=$idc&v=2'>2</a>"
                                . "<a class='votar' href='php/votar.php?idc=$idc&v=3'>3</a>"
                                . "<a class='votar' href='php/votar.php?idc=$idc&v=4'>4</a>"
                                . "<a class='votar' href='php/votar.php?idc=$idc&v=5'>5</a>"
                                ?>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                    ?>
                </div>
                <div class="oculto" id="musicos2">
                    <h2>Musicos</h2>
                    <?php
                    $consulta = mysql_query("SELECT * FROM usuarios WHERE tipo = 2", $conexion) or die("No se encuentran datos");
                    $consulta2 = mysql_query("SELECT * FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                    while ($row = mysql_fetch_array($consulta2)) {
                        
                    }
                    while ($row = mysql_fetch_array($consulta)) {
                        $video = $row['video'];
                        $idm = $row['id_usuario'];
                        ?>
                        <div id="conciertosa">
                            <h3><?php echo $row['nombre'] ?></h3>
                            <div>
                                <b>email:</b> <?php echo $row['mail'] ?>
                                <br>
                                <b>estilo:</b> <?php echo $row['estilo'] ?>
                                <br>
                            </div>
                            <div class="votaciones">
                                <?php
                                echo "<a class='votar' href='php/votar.php?idm=$idm&v=1'>1</a>"
                                . "<a class='votar' href='php/votar.php?idm=$idm&v=2'>2</a>"
                                . "<a class='votar' href='php/votar.php?idm=$idm&v=3'>3</a>"
                                . "<a class='votar' href='php/votar.php?idm=$idm&v=4'>4</a>"
                                . "<a class='votar' href='php/votar.php?idm=$idm&v=5'>5</a>"
                                ?>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                    ?>
                </div>
                <div class="oculto" id="locales2">
                    <h2>Locales</h2>
                    <?php
                    $consulta = mysql_query("SELECT * FROM usuarios WHERE tipo = 1", $conexion) or die("No se encuentran datos");
                    $consulta2 = mysql_query("SELECT * FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                    while ($row = mysql_fetch_array($consulta2)) {
                        
                    }
                    while ($row = mysql_fetch_array($consulta)) {
                        $idl = $row['id_usuario'];
                        ?>
                        <div id="conciertosa">
                            <h3><?php echo $row['nombre'] ?></h3>
                            <div>
                                <b>email:</b> <?php echo $row['mail'] ?>
                                <br>
                                <b>estilo:</b> <?php echo $row['estilo'] ?>
                                <br>
                            </div>
                            <div class="votaciones">
                                <?php
                                echo "<a class='votar' href='php/votar.php?idl=$idl&v=1'>1</a>"
                                . "<a class='votar' href='php/votar.php?idl=$idl&v=2'>2</a>"
                                . "<a class='votar' href='php/votar.php?idl=$idl&v=3'>3</a>"
                                . "<a class='votar' href='php/votar.php?idl=$idl&v=4'>4</a>"
                                . "<a class='votar' href='php/votar.php?idl=$idl&v=5'>5</a>"
                                ?>
                            </div>
                        </div>
                        <br>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>