<?php
$hostname = "localhost";
$usuario = "root";
$password = "";

//crear la conexion
$conn = mysqli_connect($hostname, $usuario, $password);

//verificar la conexion
if (!$conn) {
    die("La conexion fallo" .mysqli_connect_error());
}

echo "Conectado exitosamente con la forma Prodedimientos";



?>