<?php
session_start();
?>

<!doctype html>
<html lang=''>
    <head>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="../css/menu.css" type="text/css">
        <link href="../css/local.css" rel="stylesheet" type="text/css"/>
        <title>All4Music - Local</title>
    </head>
    <body>
        <header>
            <div id='cssmenu'>
                <a href="inicio.php"><div id="divlogo"><img src="../img/Alan.png" alt="" id="logo"/></div></a>
            </div>
            <div id="cssmenu2">
                <div>
                <?php
                $email = $_SESSION['usuario'];
                echo '<br>';
                $conexion = mysql_connect('localhost', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
		mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
                $consulta = mysql_query("SELECT nombre,foto FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                
                while ($row = mysql_fetch_array($consulta)) {
                            echo $row['nombre'];
                        	
                ?>
                </div>
                <div>
                    <?php
                    echo "<td>",'<img src ="../'.$row["foto"].'" width="50px" height="50px"><br>',"</td>"; 
                    }
                    ?>
                </div>
            </div>
        </header>
        <div id="menu">
            <ul class="menu">
                <li><a href="#">Elemento 1</a></li>
                <li><a href="#">Elemento 2</a></li>
                <li><a href="#">Elemento 3</a></li>
                <li><a href="#">Elemento 4</a></li>
                <li><a href="#">Elemento 5</a></li>
            </ul>
            <img src="../img/lupa.png" alt="" id="lupa"/>
            <input type="search" name="search_string" placeholder="Buscar" id="buscar" value="">
        </div>
        <div id="cuerpop">
            <div  id="cuerpo">
                <div>
                	<div>
                		<?php
                		$consulta = mysql_query("SELECT id_concierto,fecha FROM conciertos", $conexion) or die("No se encuentran datos");
                		
                		while ($row = mysql_fetch_array($consulta)) {
                		?>
                		<div>
                            		<?php echo $row['nombre']; ?>
                            	</div>
                            	<div>
                            		?php echo $row['nombre']; ?>
                            	</div>
                	</div>
                	<div>
                	
                	
                		<?php
                		}
                		?>
                	</div>
                </div>
            </div>
        </div>
        <footer>

        </footer>
    </body>
    <html>