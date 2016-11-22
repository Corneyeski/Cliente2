<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="validarcontrol.php" method="post">
                    <div>
                        <div class="inputs">
                            <label for="usuario"> id: </label>
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
    </body>
</html>
