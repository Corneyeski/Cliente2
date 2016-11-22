<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="javascript/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="javascript/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="javascript/jquery.validate.min.js" type="text/javascript"></script>
        <link href="slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <script src="slick/slick.js" type="text/javascript"></script>
        <script src="javascript/ejslick.js" type="text/javascript"></script>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/validacion.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
            <div id="slicks">
                <div class="imagenes">
                    <img src="img/Pawel_Kuczynski01.jpg" alt=""/>
                </div>
                <div class="imagenes">
                    <img src="img/Pawel_Kuczynski02.jpg" alt=""/>
                </div>
                <div class="imagenes">
                    <img src="img/Pawel_Kuczynski03.jpg" alt=""/>
                </div>
                <div class="imagenes">
                    <img src="img/Pawel_Kuczynski04.jpg" alt=""/>
                </div>
            </div><div id="formulario">
                <form action="muestraValores.php" id="formulari" method="post">
                    <div>
                        <label for="name">nombre:</label>
                        <br>
                        <input name="nombre" id="nombre">
                        <br>
                        <label for="calle">Calle:</label>
                        <br>
                        <input name="calle" id="calle">
                        <br>
                        <label for="numero">numero:</label>
                        <br>
                        <input name="numero" id="numero">
                        <br>
                        <label for="ciudad">ciudad:</label>
                        <br>
                        <input name="ciudad" id="ciudad">
                        <br>
                    </div>
                    <div>
                        <label for="pais">pais:</label>
                        <br>
                        <select name="pais" id="pais">
                            <option value="españa">españa</option>
                            <option value="francia">francia</option>
                            <option value="portugal">portugal</option>
                        </select>
                        <br>
                        <label for="email">email:</label>
                        <br>
                        <input name="email" id="email">
                        <br>
                        <label for="password">password:</label>
                        <br>
                        <input name="password" id="password" type="password">
                    </div>
                    <br>
                    <input type="submit" class="btn-validate">
                </form><div id="lateral" ></div>
            </div>
        </div>
    </body>
</html>
