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

//prepare una declaracion de insercion
$sql = "INSERT INTO Personas (nombre, apellido, email) VALUES (?, ?, ?)";
if ($stmt = mysqli_prepare($conn, $sql)) {

    //vincula las variables a la declaracion preparada como parametros
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $apellido, $email);

    /*establecer los valores de los parametros y ejecutar ladeclaracion para insertar una fila */
    $nombre = "Hermione";
    $apellido = "Granger";
    $email = "hermionegranger@gmail.com";
    mysqli_stmt_execute($stmt);

    /*establecer los valores de los parametros y ejecutr la declaracion nuevamente para insertar otra fila */
    $nombre = "Ron";
    $apellido = "Weasley";
    $email = "romweasley@gmail.com";
    mysqli_stmt_execute($stmt);

    echo "Registros insertados con exito.";
}else {
    echo "ERROR: no se pude preparar la consulta: $sql".mysqli_error($conn);
}

//declaracion cerrada
mysqli_stmt_close($stmt);

//conexion cerrada
mysqli_close($conn);

?>