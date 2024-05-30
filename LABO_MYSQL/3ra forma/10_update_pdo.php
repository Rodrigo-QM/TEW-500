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
    $sql = "UPDATE Personas SET apellido = 'Doe' WHERE id = 2";

    $stmt = $conn->prepare($sql);
    //Preparar decalracion
    $stmt->execute();

    //echo un mensaje para decir que la actualizacion se arealizo
    //1 se modifico
    //0 no se modifico
    echo $stmt->rowCount()." registro ACTUALIZDO exitosamente";
} catch (PDOException $e) {
    echo $sql ."<br> ".$e->getMessage();
}

$conn = null;


?>