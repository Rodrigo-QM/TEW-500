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

$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Ariel', 'Huanca Sosa', 'juan@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Lilia Elisabeth', 'Janco', 'lilia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Liseth Brisila', 'Quino Arias', 'lis@example.com');";



if (mysqli_multi_query($conn, $sql)) {
    echo "Nuevos registros creados exitosamente";
}else {
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>