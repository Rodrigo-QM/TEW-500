<?php
$hostname = "localhost";
$usuario = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$hostname", $usuario, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Conectado exitosamente con PDO";

    //Crear base de datos
    $query = "CREATE DATABASE pdo_php";
    $conn->exec($query);
    echo "Base de datos creada con exito con PDO";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
}

$conn = null;

?>