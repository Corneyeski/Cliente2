<div style="text-align: center">
<p>Bienvenido a mi web de musica metalera!!! Ohhh Yeahh!!<br/>
<?php
date_default_timezone_set('Europe/Madrid');
echo 'En el día del metal ';
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>
<br/>
</div>