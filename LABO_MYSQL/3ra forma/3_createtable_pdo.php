<?php 
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "pdo_php";
//crear conexion 
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password );
    //establecer el modo de error PDO en excepcion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Conectado exitosamente con PDO";

//echo "conectado exitosamentecon la forma procedimiento ";
//sql para crear tabla 
    $sql = "CREATE TABLE Personas (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    //Usar exec() porque no se devuelven resultados
    $conn->exec($sql);
    echo "Tabla Personas creada con exito";
}catch(PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}
    
$conn = null;

?>