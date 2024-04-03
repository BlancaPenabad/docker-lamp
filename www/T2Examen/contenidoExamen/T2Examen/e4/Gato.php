<?php

require_once("Animal.php");

class Gato extends Animal implements Mascota{

    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }

    public function emitirSonido(){
        echo "Miau, miau</br>";
    }

    public function obtenerNombre(){
        return "Soy un gato, mi nombre es ".$this->getNombre()."... ";
    }
}


?>