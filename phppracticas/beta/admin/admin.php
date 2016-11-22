<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>ERES EL PUTO ADMIN</div>
        <?php
        if (!$_POST["mostrar"]) {
            ?> 
            <form action="admin.php" method="post"> 
                <br> 
                <input type="submit" value="Mostrar" name="mostrar"> 
            </form>
            <?php
        } else {
            $conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar con el servidor");
            mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos");
            $consulta = mysql_query("SELECT * FROM usuarios", $conexion);
            ?>
            <table border = "1" width = "100%"> 
                <tr> 
                    <th>nombre</th>
                    <th>tipo</th>
                    <th>mail</th>
                    <th>contraseña</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>ciudad</th>
                    <th>estilo</th>
                </tr> 
                <?php
                while ($row = mysql_fetch_array($consulta)) {
                    ?> 
                    <tr>
                        <td> <?= $row['nombre'] ?> </td> 
                        <td> <?= $row['tipo'] ?> </td> 
                        <td> <?= $row['mail'] ?> </td>
                        <td> <?= $row['contrasenya'] ?> </td> 
                        <td> <?= $row['direccion'] ?> </td> 
                        <td> <?= $row['telefono'] ?> </td> 
                        <td> <?= $row['ciudad'] ?> </td>
                        <td> <?= $row['estilo'] ?> </td>
                    </tr> 
                    <?php
                }
            }
            ?> 
        </table>
        <h1>Listar locales</h1>
        <?php
        if (!$_POST["mostrar2"]) {
            ?> 
            <form action="admin.php" method="post"> 
                <br> 
                <input type="submit" value="Mostrar2" name="mostrar2"> 
            </form>
            <?php
        }  else {
            $conexion =new mysqli("localhost", "hgkbzorb_alan", "1Hermano?","hgkbzorb_all4music") or die("no se puede conectar con el servidor");
            $consulta =$conexion->query("SELECT * FROM usuarios where tipo=1");
            ?>
            <table border = "1" width = "100%"> 
                <tr> 
                    <th>nombre</th>
                    <th>tipo</th>
                    <th>mail</th>
                    <th>contraseña</th>
                    <th>direccion</th>
                    <th>telefono</th>
                    <th>ciudad</th>
                    <th>estilo</th>
                </tr> 
                <?php
                while ($row=$consulta->fetch_object()) {
                   echo '<tr>';
                   echo '<td>'.$row->nombre.'</td>'; 
                   echo '<td>'.$row->tipo.'</td>';  
                   echo '<td>'.$row->mail.'</td>'; 
                   echo '<td>'.$row->contrasenya.'</td>';  
                   echo '<td>'.$row->direccion.'</td>'; 
                   echo '<td>'.$row->telefono.'</td>'; 
                   echo '<td>'.$row->ciudad.'</td>'; 
                   echo '<td>'.$row->estilo.'</td>'; 
                   echo '</tr>'; 
                }
            }
            ?> 
        </table>
        <h1>Dar un usuario de alta</h1>

        <form action="php/aalta.php" method="post">
            <div>
                <div>
                    <div>
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="apellido">Apellido:</label>
                    </div>
                    <div>
                        <input type="text" name="apellido" id="apellido"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input type="email" name="ce" id="ce"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="fn">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1" minlength="8"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps2">Contraseña de nuevo:</label>
                    </div>
                    <div>
                        <input type="password" name="ps2" id="ps2"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="tipo">tipo:</label>
                    </div>
                    <div>
                        <select name="tipo" id="tipo"/>
                        <option value="0">Fan</option>
                        <option value="1">Local</option>
                        <option value="2">Musico</option>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="direccion">Direccion:</label>
                    </div>
                    <div>
                        <input type="text" name="direccion" id="direccion"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="numero">telefono contacto:</label>
                    </div>
                    <div>
                        <input type="number" name="numero" id="numero"/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <select name="estilo" id="estilo"  required/>
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
                        <label for="ciudad">Ciudad:</label>
                    </div>
                    <div>
                        <select name="ciudad" id="ciudad"  required/>
                        <option>Seleccione una Opción...</option>
                        <?php
                        $conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar con el servidor");
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
                <input type="submit" value="Registrate"/>
            </div>
        </form>
        <br>
        <h1>Modificar Datos</h1>
        <?php
        if (!$_POST["enviar"]) {
            ?> 
            <form action="admin.php" method="post"> 
                Correo <input type="text" name="ce" size="30"> 
                <br> 
                <input type="submit" value="Enviar" name="enviar"> 
            </form> 
            <?php
        } else {
            $conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar con el servidor");
            mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar con la Base de datos");
            $consulta = mysql_query("SELECT * FROM usuarios WHERE mail='" . $_POST['ce'] . "'", $conexion);

            while ($row = mysql_fetch_array($consulta)) {
                ?>
                <br> <?= $row['nombre'] ?>
                <br> <?= $row['apellido'] ?>
                <br> <?= $row['tipo'] ?> 
                <br> <?= $row['mail'] ?> 
                <br> <?= $row['contrasenya'] ?>
                <br> <?= $row['direccion'] ?>
                <br> <?= $row['telefono'] ?> 
                <br> <?= $row['id_ciudad'] ?>
                <br> <?= $row['estilo'] ?>
                <form action="php/amod.php" method="post">
            <div>
                <div>
                    <div>
                        <label for="nombre" >Nombre:</label>
                    </div>
                    <div>
                        <input type="text" name="nombre" id="nombre" value='<?= $row['nombre'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="apellido">Apellido:</label>
                    </div>
                    <div>
                        <input type="text" name="apellido" id="apellido" value='<?= $row['apellido'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input type="email" name="ce" id="ce" value='<?= $row['mail'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="fn">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn" value='<?= $row['fecha_nacimiento'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1" minlength="8" value='<?= $row['contrasenya'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps2">Contraseña de nuevo:</label>
                    </div>
                    <div>
                        <input type="password" name="ps2" id="ps2" value='<?= $row['contrasenya'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="tipo">tipo:</label>
                    </div>
                    <div>
                        <select name="tipo" id="tipo" value='<?= $row['tipo'] ?>'/>
                        <option value="0">Fan</option>
                        <option value="1">Local</option>
                        <option value="2">Musico</option>
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="direccion">Direccion:</label>
                    </div>
                    <div>
                        <input type="text" name="direccion" id="direccion" value='<?= $row['direccion'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="numero">telefono contacto:</label>
                    </div>
                    <div>
                        <input type="number" name="numero" id="numero" value='<?= $row['telefono'] ?>'/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <select name="estilo" id="estilo"  required value='<?= $row['estilo'] ?>'/>
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
                        <label for="ciudad">Ciudad:</label>
                    </div>
                    <div>
                        <select name="ciudad" id="ciudad"  required value='<?= $row['id_ciudad'] ?>'/>
                        <option>Seleccione una Opción...</option>
                        <?php
                        $conexion = mysql_connect("localhost", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar con el servidor");
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
                <input type="submit" value="Registrate"/>
            </div>
        </form>
                <?php
            }
        }
        ?>
        <br>
        <h1>Dar de baja un usuario</h1>
        <form action="php/abaja.php" method="post">
            <div>
                <label for="ce">Correo electronico:</label>
            </div>
            <div>
                <input type="email" name="ce" id="ce"  required/>
            </div>
            <input type="submit" value="Eliminar (sin vuelta atras)"/>
        </form>
    </body>
</html>