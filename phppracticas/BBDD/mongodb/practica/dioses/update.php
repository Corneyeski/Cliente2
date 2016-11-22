
<?php

$buscar = $_POST['buscar'];
$conn = new MongoClient() or die("Error al conectar con la base de datos");
$db = $conn->selectDB('smite');
$coll = $db->selectCollection('dioses');

$query = array("nombre" => $buscar);
$busqueda = $coll->findOne($query);

$id = $busqueda['_id'];

echo "<meta http-equiv='refresh' content='0;url=editar.php?id=$id'>";

$conn->close();
?>