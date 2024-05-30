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

// SQL para crear tabla 
$sql = "CREATE TABLE Personas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla Personas creada exitosamente";
}else {
    echo "Error al crear la tabla: ".mysqli_error($conn);
}

mysqli_close($conn);

?>