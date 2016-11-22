
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>REGISTRAR USUARIOS</h1>
       <form action="validar2.php" method="post" class="oculto" id="fans2">
            <div>
                <div>
                    <div>
                        <label for="id">id:</label>
                    </div>
                    <div>
                        <input type="number" name="id" id="id"  required/>
                    </div>
                </div>
                <br>
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
                        <label for="ce">email:</label>
                    </div>
                    <div>
                        <input type="text" name="ce" id="ce"  required/>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="ps1">contrasenya:</label>
                    </div>
                    <div>
                        <input type="text" name="ps1" id="ps1"  required/>
                    </div>
                </div>
                <br>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
    </body>
</html>