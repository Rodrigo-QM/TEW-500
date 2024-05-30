<?php
    //Variables
    $sumaNotas = 0;
    $i = 0;
    //Arreglos
    $n =array();
    if (isset($_POST["btnCalcular"])) {
        //Entrada
        $n[0] = (int)$_POST["txtn1"];
        $n[1] = (int)$_POST["txtn2"];
        $n[2] = (int)$_POST["txtn3"];
        $n[3] = (int)$_POST["txtn4"];
        $n[4] = (int)$_POST["txtn5"];
        //Proceso
        for ($i = 0; $i <= 4; $i++ ) {
            $sumaNotas = $sumaNotas + $n[$i];
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Vectores</title>
</head>
<body>
    <form method="post" action="ejemplo_6.php">
        <h1>Ejemplo de Vectores</h1>
        <label>Ingrese Numero 1</label>
        <input type="text" name="txtn1"><br>
        <label>Ingrese Numero 2</label>
        <input type="text" name="txtn2"><br>
        <label>Ingrese Numero 3</label>
        <input type="text" name="txtn3"><br>
        <label>Ingrese Numero 4</label>
        <input type="text" name="txtn4"><br>
        <label>Ingrese Numero 5</label>
        <input type="text" name="txtn5"><br>
        <label>El Promedio es: </label>
        <input type="text" name="resultado" style="brackground-color: # CCFFFF" readonly value="<?= $sumaNotas ?>" />
        <input type="submit" name="btnCalcular" value="Calcular" /> 
    </form>
</body>
</html>