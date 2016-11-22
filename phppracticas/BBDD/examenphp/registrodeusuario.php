
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>REGISTRAR ACTORES</h1>
       <form action="validar.php" method="post" class="oculto" id="fans2">
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
                        <label for="sueldo">Salario:</label>
                    </div>
                    <div>
                        <input type="number" name="sueldo" id="sueldo"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="fn">Fecha nacimiento:</label>
                    </div>
                    <div>
                        <input type="date" name="fn" id="fn"  required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="nacionalidad">nacionalidad:</label>
                    </div>
                    <div>
                        <input type="text" name="nacionalidad" id="nacionalidad" required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="foto">foto:</label>
                    </div>
                    <div>
                        <input type="file" name="foto" id="foto" minlength="8" required/>
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <label for="foto">sexo:</label>
                    </div>
                    <div>
                        <input type="text" name="sexo" id="sexo" required/>
                    </div>
                </div>
                <input type="submit" value="Registrate"/>
            </div>
        </form>
    </body>
</html>
