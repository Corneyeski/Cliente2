<?php
session_start();

		$email = $_SESSION['usuario'];
                echo '<br>';
                $conexion = mysql_connect('212.48.92.208:3306', 'hgkbzorb_alan', '1Hermano?') or die("no se puede conectar");
		mysql_select_db('hgkbzorb_all4music') or die("no se puede conectar");
                $consulta = mysql_query("SELECT id_usuario FROM usuarios WHERE '$email' = mail", $conexion) or die("No se encuentran datos");
                
                $id = $consulta['id_usuario'];
                $si = "si";
                
        $conexion = mysql_connect("212.48.92.208:3306", "hgkbzorb_alan", "1Hermano?") or die("no se puede conectar");
        mysql_select_db("hgkbzorb_all4music") or die("no se puede conectar");
        mysql_query("insert into concierto (nombre,fecha,precio,duracion,id_local,id_grupo,disponibilidad) values
        ('" . $_POST['nombre'] . "','" . $_POST['fecha'] . "','" . $_POST['precio'] . "','" . $_POST['duracion'] . "',$id,0,'$si')", $conexion) or die("no se introducen"  . mysql_error());

        mysql_close($conexion);
        
        echo "<meta http-equiv='refresh' content='1;url=local.php'>";
        ?>