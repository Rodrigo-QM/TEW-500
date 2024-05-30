<?php
$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "pdo_php";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$nombreBD", $usuario, $password );
    //establecer el modo de error PDO en excepcion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Conectado exitosamente con PDO";

    //Preparar SQL y vincular parametros
    $stmt = $conn->prepare("INSERT INTO Personas (nombre, apellido, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $nombre);
    $stmt->bindParam(':lastname', $apellido);
    $stmt->bindParam(':email', $email);

    //Insertar una fila
    $nombre = "John";
    $apellido = "Doe";
    $email = "john@example.com"; 
    $stmt->execute();

    //Insertar una fila
    $nombre = "Mary";
    $apellido = "Moe";
    $email = "mary@example.com"; 
    $stmt->execute();

    //Insertar una fila
    $nombre = "Julie";
    $apellido = "Dooley";
    $email = "julie@example.com"; 
    $stmt->execute();

    echo "Nuevos registros creados exitosamente";
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}

$conn = null;

?>