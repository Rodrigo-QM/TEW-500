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

$sql = "SELECT id, nombre, apellido FROM Personas";
$result = mysqli_query($conn ,$sql);

if (mysqli_num_rows($result) > 0) {
    //datos de la salida de cada fila
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id_ ".$row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
    }
}else {
    echo "0 results";
}


//conexion cerrada
mysqli_close($conn);

?>