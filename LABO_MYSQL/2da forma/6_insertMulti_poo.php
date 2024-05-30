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
$sql = "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Juan Ariel', 'Huanca Sosa', 'juan@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Lilia', 'Janco', 'lilia@example.com');";
$sql .= "INSERT INTO Personas (nombre, apellido, email)
VALUES ('Brisila', 'Quino Arias', 'Lizeth@example.com')";

if ($conn->multi_query($sql) ===TRUE){
       echo "Nuevos registros creados exitosamente";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>