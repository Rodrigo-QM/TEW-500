<?php

class Arduino{
    private $puerto;
    private $manejador;

    public function __construct($puerto){
        $this->puerto = $puerto;
    }

    public function conectar(){
        $this->manejador = fopen($this->puerto, "w+");
        if(!$this->manejador){
            throw new \Exception("No se ha Encontrado Ninguna Placa al Puerto". $this->puerto);
        }
    }

    public function desconectar(){
        fclose($this->manejador);
    }

    public function escribir($orden){
        fputs($this->manejador, $orden);
    }
}
?>