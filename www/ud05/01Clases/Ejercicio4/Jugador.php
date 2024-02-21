<?php

require "Participante.php";

class Jugador extends Participante{

    private $posicionCampo;


    //CONSTRUCTOR QUE INCLUYE LA PROPIEDAD DE LA CLASE HIJA
    function __construct($nombre, $edad, $posicionCampo){
        parent::__construct($nombre,$edad);
        $this->posicionCampo = $posicionCampo;
    }


    //GETTERS Y SETTERS
    public function setPosicionCampo($posicionCampo){
        $this->posicionCampo = $posicionCampo;

    }


    public function getPosicionCampo(){
        return $this->posicionCampo;
    }


    //MÉTODO HEREDADO DE LA CLASE PADRE. LE AÑADO LA PROPIEDAD DE LA CLASE HIJA
    public function info(){
        echo parent::muestraInfo()." Posición campo: ".$this->posicionCampo."</br>";
    }
}

?>