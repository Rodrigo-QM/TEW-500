<?php
    //Llenando el arreglo de notas
    $estudiantes = array('JUAN ARIEL', 'LILIA ELISABET', 'LISETH BRISILA');

    //Imprimiendo los elementos
    echo 'Los estudiantes son: <br>';
    foreach ($estudiantes as $e) {
        print "[ $e ]";
    }
?>