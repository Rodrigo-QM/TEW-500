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

    //SQL para eliminar un registro
    $sql = "DELETE FROM Personas WHERE id = 3";

    //Usar exec() porque no se devuelven resultados
    $conn->exec($sql);
    echo "registro elinado exitosamente";
} catch (PDOException $e) {
   echo $sql. "<br> ".$e->getMessage();
}

$conn = null;


?>