<?php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "Hola $nombre, que tengas un buen dia.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con GET</title>
</head>

<body>
    Introduce tu nombre:
    <form action="" method="get">
        <input type="text" name="nombre"><br>
        <input type="submit" value="Enviar"><br>
    </form>
</body>
</html>