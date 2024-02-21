<?php

class Participante{

    public $nombre;
    public $edad;


    //CONSTRUCTOR
    function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }


    //GETTERS Y SETTERS
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setEdad($edad){
        $this->edad = $edad;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getEdad(){
        return $this->edad;
    }


    //FUNCIÓN QUE MUESTRA TODA LA INFORMACIÓN DE UN PARTICIPANTE
    function muestraInfo(){
        return "</br>Nombre: ".$this->nombre."</br>Edad: ".$this->edad."</br>";
    }
}

?>