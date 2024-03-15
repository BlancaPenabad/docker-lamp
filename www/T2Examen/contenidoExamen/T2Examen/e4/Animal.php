<?php

include("Mascota.php");

abstract class Animal implements Mascota{

    protected $nombre;
    protected $edad;

    
    //CONSTRUCTOR
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;

    }



    //GETTERS Y SETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }


    //FUNCIÓN ABSTRACTA
    abstract function obtenerNombre();
    abstract function emitirSonido();
}

?>