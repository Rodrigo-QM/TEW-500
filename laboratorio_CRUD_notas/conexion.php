<?php 
define('BD_SERVER','localhost');
define('BD_USERNAME','root');
define('BD_PASSWORD','');
define('BD_NAME','crud_notas');

//cadena de conexion
$mysqli = new mysqli(BD_SERVER, BD_USERNAME, BD_PASSWORD, BD_NAME);

//Verificar la conexion
if ($mysqli->connect_errno) {
    die("Fallo la conexion a MySQL:".$mysqli->connect_error);
}

?>