
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
//preparar y sql
$stmt =$conn-> prepare("INSERT INTO Personas(nombre, apellido, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $apellido, $email);

//establecer parametros y ejecutar 
$nombre = "john";
$apellido = "Doe";
$email = "john@example.com";
$stmt-> execute();

$nombre = "Mary";
$apellido = "Moe";
$email = "mary@example.com";
$stmt-> execute();

$nombre = "julie";
$apellido = "Doley";
$email = "julie@example.com";
$stmt-> execute();

echo "Nuevos resgistro creados exitosamente";

$stmt->close();
$conn->close();
?>