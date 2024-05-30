<?php
if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    echo "<p>Hola $nombre, que tengas un buen dia.</p>";
    echo "<p>Tu edad es, $edad.</p>";
}
?>
