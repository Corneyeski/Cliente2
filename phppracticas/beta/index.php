<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="javascript/index.js" type="text/javascript"></script>
    </head>
    <body>
        <img src="img/33818_abstract_geometric_abstract_shapes.jpg" alt="" id="background"/>
        <div id="imagen1">
            <img src="img/fondo_alan.png" alt="" id="logo"/>
        </div>
        <div>
            <div class="cuadros">
                <h1>¡Registrate!</h1>
                <div class="registros" id="fans">Fan</div>
                <div class="registros" id="local">Local</div>
                <div class="registros" id="musico">Musico</div>
            </div>
            <div class="cuadros">
                <h1>Inicio de sesion</h1>
                <form action="comprobacion.php" method="post">
                    <div>
                        <div class="inputs">
                            <label for="usuario"> Usuario: </label>
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
                            <input type="submit" value="Entrar"/>
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
                        <input type="text" name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1"  required/>
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
                        <input type="text" name="ciudad" id="ciudad"  required/>
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
                        <input type="number" name="numero" id="numero"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Correo electronico:</label>
                    </div>
                    <div>
                        <input type="text" name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Fecha apertura:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1"  required/>
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
                        <input type="text" name="ciudad" id="ciudad"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <input type="text" name="estilo" id="estilo"  required/>
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
                        <input type="text" name="ce" id="ce"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ce">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="ps1">Contraseña:</label>
                    </div>
                    <div>
                        <input type="password" name="ps1" id="ps1"  required/>
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
                        <input type="text" name="ciudad" id="ciudad"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="estilo">estilo:</label>
                    </div>
                    <div>
                        <input type="text" name="estilo" id="estilo"  required/>
                    </div>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
        <footer>
            <div>
                <div class="listas">Futuros conciertos</div>
                <div class="listas">Algunos de nuestros musicos</div>
                <div class="listas">Locales selectos</div>
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