<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <title>All4Music - Inicio</title>
    </head>    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="../img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="../formalta.html">Dar de alta</a></li>
                <li><a href="../buscar.php">Listar elementos</a></li>
                <li><a href="../delete.php">Eliminar elementos</a></li>
                <li><a href="../cambiar.php">editar datos</a></li>
            </ul>
        </div>
        <div id="cuerpop">
            <?php
            
            $mongo = new MongoClient() or die("Error al conectar con la base de datos");
            $id = $_GET['id'];
            echo "<br>";
            $artículos = $mongo->smite->dioses;

            $busqueda = $artículos->findOne(array('_id' => new MongoId($id)));
            ?>
            <div class="altas">
                <?php
                echo "<form action='cfinal.php?id=$id' method=post>";
                        ?>
                    <h1>Cambia los valores a modificar</h1>
                    Nombre: <input type=text name=nombre value="<?php echo $busqueda['nombre'] ?>" required>
                    <br>
                    Es:
                    <?php
                    if ($busqueda['tipo'] == "asesino") {
                        ?>
                        <input type="radio" name=tipo value="asesino" required checked="true">Asesino
                        <input type="radio" name=tipo value="mago" required>Mago
                        <input type="radio" name=tipo value="tanque" required>Tanque
                        <input type="radio" name=tipo value="adc" required>ADC
                        <input type="radio" name=tipo value="guerrero" required>Guerrero
                    <?php }
                    ?>
                    <?php
                    if ($busqueda['tipo'] == "mago") {
                        ?>
                        <input type="radio" name=tipo value="asesino" required >Asesino
                        <input type="radio" name=tipo value="mago" required checked="true">Mago
                        <input type="radio" name=tipo value="tanque" required>Tanque
                        <input type="radio" name=tipo value="adc" required>ADC
                        <input type="radio" name=tipo value="guerrero" required>Guerrero
                        <?php
                    }
                    ?>
                    <?php
                    if ($busqueda['tipo'] == "tanque") {
                        ?>
                        <input type="radio" name=tipo value="asesino" required >Asesino
                        <input type="radio" name=tipo value="mago" required>Mago
                        <input type="radio" name=tipo value="tanque" required checked="true">Tanque
                        <input type="radio" name=tipo value="adc" required>ADC
                        <input type="radio" name=tipo value="guerrero" required>Guerrero
                        <?php
                    }
                    ?>
                    <?php
                    if ($busqueda['tipo'] == "adc") {
                        ?>
                        <input type="radio" name=tipo value="asesino" required >Asesino
                        <input type="radio" name=tipo value="mago" required>Mago
                        <input type="radio" name=tipo value="tanque" required>Tanque
                        <input type="radio" name=tipo value="adc" required checked="true">ADC
                        <input type="radio" name=tipo value="guerrero" required>Guerrero
                        <?php
                    }
                    ?>
                    <?php
                    if ($busqueda['tipo'] == "guerrero") {
                        ?>
                        <input type="radio" name=tipo value="asesino" required >Asesino
                        <input type="radio" name=tipo value="mago" required>Mago
                        <input type="radio" name=tipo value="tanque" required>Tanque
                        <input type="radio" name=tipo value="adc" required>ADC
                        <input type="radio" name=tipo value="guerrero" required checked="true">Guerrero
                        <?php
                    }
                    ?>
                    <br>
                    <h2>Introduce las hablidades y pasiva</h2>
                    Habilidad uno: <input type=text name=h1 value=" <?php echo $busqueda['h1'] ?> " required>
                    <br>
                    Habilidad dos: <input type=text name=h2 value=" <?php echo $busqueda['h2'] ?> " required>
                    <br>
                    Habilidad tres: <input type="text" name=h3 value=" <?php echo $busqueda['h3'] ?> " required>
                    <br>
                    Habilidad cuatro: <input type=text name=h4 value=" <?php echo $busqueda['h4'] ?> " required>
                    <br>
                    Pasiva: <input type="text" name=pasiva  value=" <?php echo $busqueda['pasiva'] ?> " required>
                    <br>
                    <input type=submit>
                    <input type=reset>
                </form>
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>