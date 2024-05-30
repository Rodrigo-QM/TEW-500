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
//echo "conectado exitosamentecon la forma procedimiento ";
//crear base de datos
$query = "CREATE DATABASE poo_php";
if ($conn->query($query) ===true){
    echo "Base de datos creda con exito";
}else{
    echo "Error al crear la base de datos: ".$conn->error;
}
$conn->close();
?>