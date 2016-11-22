<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="css/menu.css" type="text/css">
        <title>All4Music - Inicio</title>
    </head>    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="formalta.html">Dar de alta</a></li>
                <li><a href="buscar.php">Listar elementos</a></li>
                <li><a href="delete.php">Eliminar elementos</a></li>
                <li><a href="cambiar.php">editar datos</a></li>
            </ul>
        </div>
        <div id="cuerpop">
            <?php
            $mongo = new MongoClient() or die("Error al conectar con la base de datos");
            $id = $_GET['id'];
            echo "<br>";
            $artículos = $mongo->smite->objetos;

            $busqueda = $artículos->findOne(array('_id' => new MongoId($id)));
            ?>
            <div class="altas">
                <?php
                echo "<form action='cfinal.php?id=$id' method=post>";
                        ?>
                    <h1>Cambia los valores a modificar</h1>
                    Nombre: <input type=text name=nombre value="<?php echo $busqueda['nombre'] ?>" required>
                    <br>
                    Para:
                    <?php
                    if ($busqueda['tipo'] == "Fisico") {
                        ?>
                        <input type="radio" name=tipo value="Fisico" checked="true">Fisico 
                        <input type="radio" name=tipo value="Magico" required>Magico
                        <?php
                    } else {
                        ?>
                        <input type="radio" name=tipo value="Fisico" >Fisico 
                        <input type="radio" name=tipo value="Magico" checked="true" required>Magico
                        <?php
                    }
                    ?>
                    <br>
                    Mana: <input type=text name=mana value="<?php echo $busqueda['mana'] ?>">
                    <br>
                    Velocidad de ataque: <input type=number name=vela max="99" value="<?php echo $busqueda['vela'] ?>">
                    <br>
                    Velocidad de movimiento: <input type="number" name=velm max="99" value="<?php echo $busqueda['velm'] ?>">
                    <br>
                    Poder: <input type=number name=poder value="<?php echo $busqueda['poder'] ?>">
                    <br>
                    Cooldown: <input type="number" name=cooldown max="99" value="<?php echo $busqueda['cooldown'] ?>">
                    <br>
                    Critico: <input type="number" name=critico max="99" value="<?php echo $busqueda['critico'] ?>">
                    <br>
                    Penetracion: <input type="number" name=penetracion max="99" value="<?php echo $busqueda['penetracion'] ?>">
                    <br>
                    Robo de vida: <input type="number" name=robo max="99" value="<?php echo $busqueda['robo'] ?>">
                    <br>
                    Salud: <input type="number" name=salud value="<?php echo $busqueda['salud'] ?>">
                    <br>
                    Fisico: <input type="number" name=fisico value="<?php echo $busqueda['fisico'] ?>">
                    <br>
                    Magico: <input type="number" name=magico value="<?php echo $busqueda['magico'] ?>">
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