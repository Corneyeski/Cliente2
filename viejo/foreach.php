<?php
$matriz = array(1, 2, 3, 4);
foreach ($matriz as &$valor)
{
 $valor = $valor * 2;
}
// $matriz ahora es array(2, 4, 6, 8)
print "<pre>"; print_r($matriz); print "</pre>\n";
unset($valor); // rompe la referencia con el último elemento
?>