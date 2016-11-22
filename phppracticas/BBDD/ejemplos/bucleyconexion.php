<html>
    <head>
        <title> CONEXION A BASE DE DATOS Y MUESTRA TABLA </title>
    </head>
    <body>
        <?php
        $conexion = mysql_connect('localhost', 'root', '') or die("no se puede conectar");
        /* MySql escucha en el puerto 3306, no es necesario ponerlo */
        mysql_select_db('mibase') or die("no se puede conectar");
        $consulta = mysql_query("SELECT * FROM tabla1", $conexion);
        $numreg = mysql_num_rows($consulta); /* no necesario en este caso */
        ?>
        <table border=1>
            <tr><th>Nombre</th><th>Apellido</th><th>Curso</th></tr>
            <?php
            while ($registro = mysql_fetch_array($consulta)) { 
//Consulta el registro de la tabla en la base de datos "fetch saca datos hasta que no encuentre datos"
                echo "<tr><td>", $registro['nombre'], "</td>";
                echo "<td>", $registro['apellido'], "</td>";
                echo "<td>", $registro['curso'], "</td></tr>";
            }
            ?>
        </table>
        <br>
        <br>
        <br>
        <a href="http://localhost:81/formalta.htm"> ALTA </a><br>
        <a href="http://localhost:81/formmod.htm"> MODIFICACION </a><br>
        <a href="http://localhost:81/formbaja.htm"> BAJA </a><br>
        <?php
        mysql_free_result($consulta);
        mysql_close($conexion);
        ?>
    </body>
</html>