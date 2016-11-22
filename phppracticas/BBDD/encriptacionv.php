<body>
    <?php
    $e_mail = $_POST['mailalta'];
    $nombre = $_POST['nomalta'];
    $apellido = $_POST['mailalta'];
    $pwd = $_POST['passalta'];
    $pwd_encrip = crypt($pwd, "clavedeencriptacion");
    $conexion = mysql_connect("localhost", "root", "") or die("no se puede conectar");
    mysql_select_db("login") or die("no se puede conectar");
    /* HAREMOS EL ALTA USANDO EL COMANDO INSERT INTO DE SQL */
    mysql_query("insert into usuarios (e_mail,nombre,apellido,pass) values
('$e_mail','$nombre','$apellido','$pwd_encrip')", $conexion);
    print "<h2>Datos introducidos </h2><br>";
    echo $_POST['mailalta'], "<br>", $_POST['nomalta'], "<br>", $pwd_encrip;
    mysql_close($conexion);
    ?>
</body>
</html>