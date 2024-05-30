<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplicacion de dos numeros</title>
</head>
<body>
    <h2>Calculadora de multiplicacion</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Primer numero: <input type="number" name="numero1"><br><br>
    Segundo numero: <input type="number" name="numero2"><br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $resultado = $numero1 * $numero2;
    echo "<h3>El resultado de la multiplicacion es: " . $resultado . "</h3>";
}
?>
</body>
</html>