<?php
    //Llenando el arreglo asociativo
    $nombres_notas = array(
        'JUAN ARIEL'=> 75, 
        'LILIA ELISABET' => 70, 
        'LISETH BRISILA'=> 72
    );

    //Imprimiendo los elementos
    foreach ($nombres_notas as $estudiante => $nota) {
        echo 'El estudiante ' , $estudiante , ' tiene una nota de ' , $nota , '<br>';
    }
?>