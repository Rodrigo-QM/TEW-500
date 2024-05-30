<?php
    $colegio = [
        'primaria' => [
            'primer_grado' => 'Eduardo Perez',
            'segundo_grado' => 'Lorena Lopez',
            'tercero_grado' => 'Julio Andrade',
        ],
        'secundaria' => [
            'primer_grado' => 'Luis Perez',
            'segundo_grado' => 'Alberto Choque',
            'tercero_grado' => 'Julia Villanueva',
        ]
    ];

    foreach ($colegio as $k => $nivel) {
        echo "<pre><br>$k</b><br></pre>";
        foreach ($nivel as $n => $profesor) {
            echo "<br>$n</br><br>";
            echo $n . ':' . $profesor . '<br>';
        }
    }
?>