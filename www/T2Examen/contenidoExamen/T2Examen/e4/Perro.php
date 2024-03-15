<?php

require_once("Animal.php");

class Perro extends Animal implements Mascota{

    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }

    public function emitirSonido(){
        echo "Guau, guau</br>";
    }

    public function obtenerNombre(){
        return "Soy un perro, mi nombre es ".$this->getNombre()."... ";
    }
}


?>