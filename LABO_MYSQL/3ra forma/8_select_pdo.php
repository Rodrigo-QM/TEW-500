<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px;border: 1px solid black;'>" . parent::current()."</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
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
    $stmt = $conn->prepare("SELECT id, nombre, apellido FROM Personas");
    $stmt->execute();

    //Establece la matriz resultante en asociativa
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new  TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v){
        echo $v;
    }

} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}

$conn = null;
echo "</table>";

?>