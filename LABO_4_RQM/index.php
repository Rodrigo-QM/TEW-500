<?php
//error_reporting(0);
$path = str_replace("localhost", "",$_SERVER["DOCUMENT_ROOT"]);
$path .= "/TEW-500_RQM/LABO_4_RQM";

require $path.'/core/Arduino.php';
require $path.'/core/Led.php';

define('PORT',"\\\\.\\COM6");
define('PIN', 13);

$status = "";

if(isset($_GET["estado"])){
    $status = $_GET["estado"];
    try {
        $led = new Led(PORT, PIN);
        $led->conectar();
        if ($status == "on") {
            $led->encender();
        }
        if ($status == "off") {
            $led->apagar();
        }
        $led->desconectar();
    } catch (Exception $e) {
        $status = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Web de un LED</title>
</head>
<body>
    <h1>Control Web de un LED</h1>
    <p><a href="?estado=on">Encender Led</a></p>
    <p><a href="?estado=off">Apagar Led</a></p>
</body>
</html>