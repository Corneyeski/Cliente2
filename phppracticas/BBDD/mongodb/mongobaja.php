<html>
    <head>
        <title> LISTAR COLECCION DE MONGO PARA ELIMINAR </title>
    </head>
    <body>
        <?php
        $conn = new MongoClient() or die("Error al conectar con la base de datos");
        $db = $conn->selectDB('stucom');
        $coll = $db->selectCollection('alumnos');
        $alumnos = $coll->find();
        foreach ($alumnos as $alumno) {
            $id = $alumno["_id"];
            echo "<tr><td>" . $alumno['nombre'] . "</td> &nbsp <td>" . $alumno['apellido'] . "</td>";
            echo "<td>
<a href='borrar_usuario_mongo.php?id=$id'>Borrar</a>
</td></tr>";
            echo "<br>";
        }
        $conn->close();
        ?>
    </body>
</html>