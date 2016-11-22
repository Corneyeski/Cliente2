<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
// Muestra toda la informacion, por omision INFO_ALL
        phpinfo();
// Mostrar solo la informacion de modulos.
// phpinfo(8) produce el mismo resultado.
        phpinfo(INFO_MODULES);
        ?>
    </body>
</html>
