<html>
<head>
 <title>Encuentra mi Peli favorita</title>
</head>
<body>
<?php
//Añade esta linea
$mipeli=urlencode('Pulp Fiction');
//Modifica la siguiente linea
echo "<a href=\"web_de_pelis.php?favorita=$mipeli\">";
echo '<br/>';
echo 'Pincha aqui para ver informacion de mi peli favorita';
 ?>
</body>
</html>