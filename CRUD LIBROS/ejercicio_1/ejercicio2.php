<?php

function contarCaracteres($texto) {
    $conteo = [
        'vocales' => 0,
        'consonantes' => 0,
        'espacios' => 0
    ];
    
    // Convertimos el texto a minúsculas para simplificar el conteo
    $texto = mb_strtolower($texto);
    
    // Definimos las listas de vocales y consonantes
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $consonantes = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'ñ', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
    
    // Contamos las vocales, consonantes y espacios en blanco
    for ($i = 0; $i < mb_strlen($texto); $i++) {
        $caracter = mb_substr($texto, $i, 1);
        
        if (in_array($caracter, $vocales)) {
            $conteo['vocales']++;
        } elseif (in_array($caracter, $consonantes)) {
            $conteo['consonantes']++;
        } elseif ($caracter === ' ') {
            $conteo['espacios']++;
        }
    }
    
    return $conteo;
}

// Ejemplo de uso
$texto = "Hola Amigos Como Estan";
$resultado = contarCaracteres($texto);

// Imprimimos el resultado
echo "Número de vocales: " . $resultado['vocales'] . "<br>";
echo "Número de consonantes: " . $resultado['consonantes'] . "<br>";
echo "Número de espacios en blanco: " . $resultado['espacios'] . "<br>";
?>
