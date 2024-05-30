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
//echo "Conectado exitosamente con la forma Prodedimientos";


$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Alejandro', 'Apaza', 'ale@hotmail.com')";


if (mysqli_query($conn, $sql)) {
    $ultimo_id = mysqli_insert_id($conn);
    echo "Nuevo registro creado con exito. La ultima identificacion insertada es: ".$ultimo_id;
}else {
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>