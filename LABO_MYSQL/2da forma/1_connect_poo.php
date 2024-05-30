<?php 
$hostname = "localhost";
$usuario = "root";
$password = "";

//crear conexion 
$conn = new mysqli($hostname,$usuario,$password);

//verificar la conexion 
if ($conn->connect_error){
    die ("la conexion fallo".$conn->connect_error);
}
echo "conectado exitosamentecon la forma POO ";
?>