<?php
    class Persona
    {
        #Atributos
        public $nombre;
        public $edad;
        public $altura;
        
        public function __GET($atributo)
        {
            return $this->$atributo;
        }
        public function __SET($atributo, $contenido)
        {
            $this->$atributo = $contenido;
        }
        #Metodo
        function Mostrar()
        {
            echo "Su Nombre es: $this->nombre <br>";
            echo "Su Edad es: $this->edad <br>";
            echo "Su Altura es: $this->altura <br>";
        }
    }
    $juan = new Persona ();
    $juan->__SET('nombre', 'Juan Ariel');
    $juan->__SET('edad', '15');
    $juan->__SET('altura', '1.80');
    echo "<h2>La persona es: ";
    echo $juan->__GET('nombre');
    echo "</h2>";
    echo $juan->Mostrar();

    $lilia = new Persona ();
    $lilia->__SET('nombre', 'Lilia Elisabeth');
    $lilia->__SET('edad', '20');
    $lilia->__SET('altura', '1.50');
    echo "<h2>La persona es: ";
    echo $lilia->__GET('nombre');
    echo "</h2>";
    echo $lilia->Mostrar();

    $lis = new Persona ();
    $lis->__SET('nombre', 'Liseth Brisila');
    $lis->__SET('edad', '22');
    $lis->__SET('altura', '1.20');
    echo "<h2>La persona es: ";
    echo $lis->__GET('nombre');
    echo "</h2>";
    echo $lis->Mostrar();


    