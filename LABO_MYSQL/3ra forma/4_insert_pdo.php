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

    //SQL para crear tabla
    $query = "INSERT INTO Personas (nombre, apellido, email)
    VALUES('Alejandro', 'Apaza', 'ale@hotmail.com')";

    //Usar exec() porque nose devuelven resultados
    $conn->exec($query);
    echo "Nuevo registro creado con exito";
} catch (PDOException $e) {
    echo $query."<br>".$e->getMessage();
}

$conn = null;

?>