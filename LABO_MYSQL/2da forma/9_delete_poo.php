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
//sql para eliminar registro
$sql = "DELETE FROM Personas WHERE id = 3 ";
if ($conn-> query($sql) ===TRUE){
    echo "Registro eleiminado exitosamente";

}else{
    echo "error al eliminar registro: ".$conn->error;
}
$conn->close();

?>