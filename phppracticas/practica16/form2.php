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
        <form id="form2">
        <label for="nombre">nombre tres letras minimo</label>
        <input id="nombre" name="nombre">
        <br>
        <label for="codigo">codigo de barras opcional 13 numeros</label>
        <input id="codigo" name="codigo">
        <br>
        <label for="cad">caducidad opcional fecha valida</label>
        <input id="cad" name="cad">
        <br>
        estado?
        <select name="estado" id="estado">
            <option value="normal">Normal</option> 
            <option value="oferta">Oferta</option>
            <option value="descuento">Descuento</option>
        </select>
        <br>
        <input type="checkbox" name="nutricion" id="nutricion">
            informacion nutricional?
            <br>
            
            <div id="oculto">
                <label for="grasas">grasas</label>
                <input name="grasas" id="grasas">
                <br>
                <label for="azucar">azucares</label>
                <input name="azucar" id="azucar">
                <br>
                <label for="fibra">fibra</label>
                <input name="fibra" id="fibra">
                <br>
            </div>
            <input type="submit" id="enviar" value="enviar">   
        </form>
    </body>
</html>
