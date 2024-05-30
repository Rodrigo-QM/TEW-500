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
//echo "Conectado exitosamente con la forma Prodedimientos";

//crear base de datos
$query = "CREATE DATABASE procedimiento_php";

if (mysqli_query($conn , $query)) {
    echo "Base de datos creada con exito";
}else {
    echo "Error al crear la base de datos: ".mysqli_error($conn);
}

mysqli_close($conn);

?>