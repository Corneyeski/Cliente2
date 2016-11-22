<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-2.1.4.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/pluginsJS.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form id="formulari1">
            <label for="nombre">nombre tres letras minimo</label>
            <input name="nombre" id="nombre">
            <br>
            <label for="apellido">apellido cuatro letras minimo</label>
            <input id="apellido" name="apellido">
            <br>
            <label for="fecha">fecha nacimiento valida obligatoria</label>
            <input id="fecha" name="fecha">
            <br>
            <label for="numero">numero de pcs en casa entre 0 y 10</label>
            <input id="numero" name="numero">
            <br>
            
            <input type="radio" name="aceptar" id="aceptar">
            aceptar condiciones, obligatorio
            <br>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
