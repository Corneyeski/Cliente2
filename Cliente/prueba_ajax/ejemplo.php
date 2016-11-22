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
        $repe = $_POST['repe'];
        $pal = $_POST['palabra'];
        while ($repe > 0) {
            $palabra = $pal;
            $repe--;
        }

        $respuesta = '{"palabra":"' . $palabra . '"}';
        
        echo $respuesta;
        ?>
    </body>
</html>
