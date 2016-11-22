<html>
<head>
 <title>Uso de variables- Mi Peli favorita</title>
</head>
<body>
<?php
echo 'Mi peli favorita es ';
echo $_GET['favorita']; /*añade esta linea y elimina la que definias la CONSTANTE FAVORITA */
echo '<br/>';
$puntuacion=7;
echo 'Mi puntuacion para esta peli es:';
echo $puntuacion;
?>
</body>
</html>