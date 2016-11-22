<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="javascript/index.js" type="text/javascript"></script>
        <script src="javascript/vform.js" type="text/javascript"></script>
    </head>
    <body>
        <img src="img/Music-Notes-Wallpaper-0.jpg" alt="" id="background"/>
        <div id="imagen1">
            <img src="img/Alan.png" alt="" id="logo"/>
        </div>
        <div>
            <div class="cuadros">
                <h1>¡Regístrate!</h1>
                <div class="registros" id="fans">Fan</div>
                <div class="registros" id="local">Local</div>
                <div class="registros" id="musico">Músico</div>
            </div>
            <div class="cuadros">
                <h1>Inicio de sesión</h1>
                <form action="php/validar.php" method="post">
                    <div>
                        <div class="inputs">
                            <label for="usuario"> Correo: </label>
                            <br>
                            <br>
                            <label for="password"> Contraseña: </label>
                        </div>
                        <div class="inputs2">
                            <input type="text" name="usuario" id="usuario"required/>
                            <br>
                            <br>
                            <input type="text" name="password" id="password" required/>
                        </div>
                        <div id="submit">
                            <input type="submit" value="Entrar" class="registros"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="ocultar"></div>
        <form action="php/formf.php" method="post" class="oculto" id="fans2">
            <div>
                <div>
                    <div>
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="apellido">Apellido:</label>
                    </div>
                    <div>
                        <input type="text" name="apellido" id="apellido"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input type="email" name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="fn">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1" minlength="8" required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps2">Contraseña de nuevo:</label>
                    </div>
                    <div>
                        <input type="password" name="ps2" id="ps2"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ciudad">Ciudad:</label>
                    </div>
                    <div>
                        <select name="ciudad" id="ciudad"  required>
                        <option>Seleccione una Opción...</option>/*
                         <?php
                        
                        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos music");
                        $consulta = mysql_query("SELECT id_ciudad,nombre FROM ciudad", $conexion);

                        while ($row = mysql_fetch_array($consulta)) {
                            echo'<OPTION VALUE="' . $row['id_ciudad'] . '" >' . $row['nombre'] . '</OPTION>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
        <form action="php/forml.php" method="post" class="oculto" id="local2">
            <div>
                <div>
                    <div>
                        <label for="nombre">Nombre local:</label>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="numero">telefono contacto:</label>
                    </div>
                    <div>
                        <input name="numero" id="numero"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Fecha apertura:</label>
                    </div>
                    <div>
                        <input name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1" minlength="8" required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps2">Contraseña de nuevo:</label>
                    </div>
                    <div>
                        <input type="password" name="ps2" id="ps2"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ciudad">Ciudad:</label>
                    </div>
                    <div>
                        <select name="ciudad" id="ciudad"  required>
                        <option>Seleccione una Opción...</option>
                        <?php
                        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos music");
                        $consulta = mysql_query("SELECT id_ciudad,nombre FROM ciudad", $conexion);

                        while ($row = mysql_fetch_array($consulta)) {
                            echo'<OPTION VALUE="' . $row['id_ciudad'] . '">' . $row['nombre'] . '</OPTION>';
                        }
                        ?>

                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <select name="estilo" id="estilo"  required>
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
                        <input type="text" name="direccion" id="direccion"  required/>
                    </div>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
        <form action="php/formm.php" method="post" class="oculto" id="musico2">
            <div>
                <div>
                    <div>
                        <label for="nombre">Nombre grupo:</label>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="numero">telefono contacto:</label>
                    </div>
                    <div>
                        <input type="number" name="numero" id="numero"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1" required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps2">Contraseña de nuevo:</label>
                    </div>
                    <div>
                        <input type="password" name="ps2" id="ps2"  required/>
                    </div>
                </div>
                <br />
                <div>
                    <div>
                        <label for="ciudad">Ciudad:</label>
                    </div>
                    <div>
                        <select name="ciudad" id="ciudad"  required/>
                        <option>Seleccione una Opción...</option>
                        <?php
                        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos music");
                        $consulta = mysql_query("SELECT id_ciudad,nombre FROM ciudad", $conexion);

                        while ($row = mysql_fetch_array($consulta)) {
                            echo'<OPTION VALUE="' . $row['id_ciudad'] . '">' . $row['nombre'] . '</OPTION>';
                        }
                        ?>
                        </select>
                    </div>
                </div>
                <br />
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <select name="estilo" id="estilo"  required>
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
                        <label for="foto">foto:</label>
                    </div>
                    <div>
                        <input type="file" name="foto" id="foto" required/>
                    </div>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
        <div class="oculto" id="musicos">
            <?php
            $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos music");
            $consulta = mysql_query("SELECT nombre,estilo,tipo FROM usuarios WHERE tipo = 2 and order by estilo asc", $conexion);

            while ($row = mysql_fetch_array($consulta)) {
                echo'' . $row['nombre'] . '';
            }
            ?>
            <button>Ordenar por puntuacion</button>
            <button>Ordenar por alfabeto</button>
            <br>
            <input type="text" id="buscar1"/>
        </div>
        <div class="oculto" id="locales">
            <?php
            $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos music");
            $consulta = mysql_query("SELECT nombre FROM usuarios", $conexion);

            while ($row = mysql_fetch_array($consulta)) {
                echo'<OPTION VALUE="' . $row['id_ciudad'] . '">' . $row['nombre'] . '</OPTION>';
            }
            ?>
            <button>Ordenar por puntuacion</button>
            <button>Ordenar por alfabeto</button>
            <br>
            <input type="text" id="buscar1"/>
        </div>
        <div class="oculto" id="conciertos">
            <nav>
                <ul>
                    <li>primavera sound festival</li>
                    <li>octoverfest</li>
                    <li>san fermin</li>
                    <li>rock in rio</li>
                    <li>tomorrowland</li>
                </ul>
            </nav>
            <button>Ordenar por puntuacion</button>
            <button>Ordenar por alfabeto</button>
            <br>
            <input type="text" id="buscar1"/>
        </div>
        <footer>
            <div>
                <div class="listas" id="conciertos2">Futuros conciertos</div>
                <div class="listas" id="musicos2">Nuestros musicos</div>
                <div class="listas" id="locales2">Locales selectos</div>
            </div>
            <div>
                <div>
                    <a href="https://www.instagram.com/" target="new">
                        <img src="img/instagram-256.png" alt="" id="rrss1"/>
                    </a>
                </div>
                <div>
                    <a href="https://twitter.com/" target="new">
                        <img src="img/twitter-1024.png" alt="" id="rrss2"/>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com/" target="new">
                        <img src="img/icon-facebook-white.png" alt="" id="rrss3"/>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>