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

    //Comenzar la transaccion
    $conn->beginTransaction();
    //Nuevas declaraciones SQL
    $conn->exec("INSERT INTO Personas (nombre, apellido, email)
    VALUES('Juan Ariel', 'Huanca Sosa', 'juan@example.com')");
    $conn->exec("INSERT INTO Personas (nombre, apellido, email)
    VALUES('Lilia Elisabeth', 'Janco', 'lilia@example.com')");
    $conn->exec("INSERT INTO Personas (nombre, apellido, email)
    VALUES('Liseth Brisila', 'Quino Arias', 'lis@example.com')");

    //Confirmar transacion
    $conn->commit();
    echo "Nuevos registros creados exitosamente";
} catch (PDOException $e) {
    //Revierte la transacion si algo falla
    $conn->rollback();
    echo "Error: ".$e->getMessage();
}

$conn = null;

?>