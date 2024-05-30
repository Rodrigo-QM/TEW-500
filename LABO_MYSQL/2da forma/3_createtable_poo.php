<?php 
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "poo_php";
//crear conexion 
$conn = new mysqli($hostname,$usuario,$password,$nombreBD);
//verificar la conexion 
if ($conn->connect_error){
    die ("la conexion fallo".$conn->connect_error);
}
//echo "conectado exitosamentecon la forma procedimiento ";
//sql para crear tabla 
$sql = "CREATE TABLE Personas(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === TRUE){
    echo "tabla Personas creada con exito";
}else{
    echo "Error al crear la tabla: ".$conn->error;
}
$conn->close();
?>