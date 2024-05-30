<?php
    class Persona
    {
        #Atributos
        public $nombre = 'Alejandro';
        public $edad = 45;
        public $altura = 1.89;
        #Metodos
        function Mostrar()
        {
            echo "Su Nombre Es: $this->nombre <br>";
            echo "Su Edad Es: $this->edad <br>";
            echo "Su Altura Es: $this->altura <br>";
        }
    }
    $persona = new Persona();
    echo $persona->Mostrar();
?>