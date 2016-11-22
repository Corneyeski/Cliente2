<?php
$conn = new MongoClient() or die("Error al conectar con la base de datos");
$db = $conn->selectDB('smite');
$coll =  new MongoCollection($db,'dioses');

$identi =$_GET['id'];
$usuario = $coll->remove(array('_id' => new MongoId($identi)));
$conn->close();

echo "<meta http-equiv='refresh' content='0;url=../formalta.html'>";
?>