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

$sql = "SELECT id, nombre, apellido FROM Personas";
$result = $conn->query($sql);

if($result->num_rows > 0){
    //datos de salida de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "id: ".$row["id"]." - Name " . $row["nombre"]. " " . $row["apellido"]. "<br>";

    }
}else{
    echo "0 results";
    }
    $conn-> close();
?>
