<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreDB = "procedimiento_php";

//crear la conexion
$conn = mysqli_connect($hostname, $usuario, $password, $nombreDB);

//verificar la conexion
if (!$conn) {
    die("La conexion fallo" .mysqli_connect_error());
}

$sql = "UPDATE Personas SET apellido = 'Humerez Janco' WHERE id = 2";

if (mysqli_query($conn, $sql)) {
    echo "Registros actualizado exitosamente";
}else {
    echo "Error al actualizar registro: " . mysqli_error($conn);
}


//conexion cerrada
mysqli_close($conn);

?>