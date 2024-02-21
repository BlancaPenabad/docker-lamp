<?php

require "Participante.php";

class Arbitro extends Participante{

    private $anyos;


    //CONSTRUCTOR QUE INCLUYE LA PROPIEDAD DE LA CLASE HIJA
    function __construct($nombre, $edad, $anyos){
        parent::__construct($nombre,$edad);
        $this->anyos = $anyos;
    }


    //GETTERS Y SETTERS
    public function setAnyos($anyos){
        $this->anyos = $anyos;

    }


    public function getAnyos(){
        return $this->anyos;
    }


    //MÉTODO HEREDADO DE LA CLASE PADRE. LE AÑADO LA PROPIEDAD DE LA CLASE HIJA
    public function info(){
        echo parent::muestraInfo()." Años arbitrando: ".$this->anyos."</br>";
    }
}

?>