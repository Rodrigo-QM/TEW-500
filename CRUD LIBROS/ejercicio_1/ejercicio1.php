<?php

function nombres($nombre) {
    $vector = []; 
    
    
    for ($i = 0; $i < strlen($nombre); $i++) {
        $vector[] = $nombre[$i]; 
    }
    
    return $vector;
}


$nombre = "HOLA_COMO_ESTAS";
$letrasNombre = nombres($nombre);


echo "Las letras del nombre '$nombre' son: ";
foreach ($letrasNombre as $letra) {
    echo $letra . " ";
}
?>
