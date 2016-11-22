<html>
<title>practica 1-2</title>
<h1>Los datos son:</h1>
<?php
echo 'su nombre es ';
echo $_GET['nombre'];
echo $_GET['apellido'];
echo '<br>';
echo 'tiene ';
echo $_GET['edad'];
echo ' anyos';
echo '<br>';
echo 'su telefono es ';
echo $_GET['telefono'];
echo '<br>';
echo 'y vive en ';
echo $_GET['direccion'];
?>
</html>