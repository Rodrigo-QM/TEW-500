<?php
if (isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];
    echo "Hola $nombre,que tengas un buen dia.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Ejemplo con GET</title>
</head>
<body>
    Introduce tu nombre:
    <form action= "" method="get">
    <input type "text" name="nombre"><br>
    <input type="submit" value="Enviar">
</form>
    
</body>
</html>