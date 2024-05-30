<?php

sleep(3);

//Verificacion que los datos llegen por el metodo POST
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    
    //recogiendo las variables
    $numA = $_POST['num1'];
    $numB = $_POST['num2'];

    //suma
    $resultado = $numA + $numB;

    //Mostrar la variable resultado
    echo "El resultado de la suma es: ".$resultado;
}


?>