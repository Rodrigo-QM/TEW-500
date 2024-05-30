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
VALUES ('Alejandro', 'Apaza', 'ale@hotmail.com')";
if ($conn->query($sql) === TRUE){
    echo "nuevo registro creada con exito";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>