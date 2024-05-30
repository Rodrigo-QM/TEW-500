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
 //SQL para eliminar un registro
$sql = "DELETE FROM Personas WHERE id = 3";

if (mysqli_query($conn, $sql)) {
    echo "Registros eliminados exitosamente";
}else {
    echo "Error al eliminar registro: " . mysqli_error($conn);
}


//conexion cerrada
mysqli_close($conn);

?>