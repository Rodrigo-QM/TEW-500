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
$sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";
if ($conn-> query($sql) === TRUE){
    echo "Registro actualizado con exito";

}else{
    echo "Error al actualizar registro: ". $conn->error;
}
$conn->close();
?>