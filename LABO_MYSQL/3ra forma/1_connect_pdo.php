<?php
$hostname = "localhost";
$usuario = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$hostname", $usuario, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";
} catch (PDOException $e) {
    echo "La conexion Falló: ".$e->getMessage();
}

?>