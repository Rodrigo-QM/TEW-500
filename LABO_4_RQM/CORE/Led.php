<?php

class Led extends Arduino {
    private $pin;
    public function __construct($puerto, $pin){
        parent::__construct($puerto);
        $this->pin = $pin;
        parent::escribir($this->pin);
    }

    public function encender() {
        parent::escribir("1");
    }

    public function apagar() {
        parent::escribir("0");
    }
}
?>