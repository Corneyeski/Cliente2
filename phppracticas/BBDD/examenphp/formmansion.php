<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="validarmansion.php" method="post" class="oculto" id="fans2">
            <div>
                <div>
                    <div>
                        <label for="direccion">direccion:</label>
                    </div>
                    <div>
                        <input type="text" name="direccion" id="direccion"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="m2">m2:</label>
                    </div>
                    <div>
                        <input type="number" name="m2" id="m2"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="precio">precio:</label>
                    </div>
                    <div>
                        <input type="number" name="precio" id="precio"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="piscina">piscina:</label>
                    </div>
                    <div>
                        <input type="text" name="piscina" id="piscina" maxlength="2" required/>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="foto">foto:</label>
                    </div>
                    <div>
                        <input type="file" name="foto" id="foto"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <select name="actor" id="actor"  required>
                        <option>Seleccione una Opción...</option>/*
                        <?php
                        $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar con el servidor");
                        mysql_select_db("jolibut") or die("no se puede conectar con la Base de datos music");
                        $consulta = mysql_query("SELECT id_actor,nombre FROM actores", $conexion);

                        while ($row = mysql_fetch_array($consulta)) {
                            echo'<OPTION VALUE="' . $row['id_actor'] . '" >' . $row['nombre'] . '</OPTION>';
                        }
                        ?>

                    </select>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
    </body>
</html>
