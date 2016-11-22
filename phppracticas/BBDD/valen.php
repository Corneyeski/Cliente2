<?php

$e_mail = $_POST['e_mail'];
$pwd = $_POST['pwd'];
$pwd_encrip = crypt($pwd, "clavedeencriptacion"); /* cuidado con las comillas al pegar word */
$conexion = mysql_connect('localhost', 'root', '') or die("no se puede conectar");
mysql_select_db('login') or die("no se puede conectar");
$consulta = mysql_query("select * from usuarios where e_mail='" . $e_mail . "' and pass='" . $pwd_encrip . "'");
$Result1 = mysql_fetch_row($consulta);
if (!$Result1) { /* si el resultado de la query es negativa manda un mensaje de alerta */
    echo "usuario incorrecto";
    echo'<br/>';
    echo'<A HREF="form_validacion.htm">Haz clic aquí para volverte a validar</A>';
} else {
    echo "HAS TRIUNFADO!!!! Usuario Correcto!!!!!";
}
?>