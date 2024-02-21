<?php

class Alien{

    public $nombre;
    public static $numberOfAliens = 0;

    //CONSTRUCTOR
    function __construct($nombre){
        $this->nombre = $nombre;
        self::$numberOfAliens++;
    }


    static function getNumberOfAliens(){
        return self::$numberOfAliens;
    }

    function muestraInfo(){
        return "</br>Nombre del alien: ".$this->nombre."</br>";
    }

}
?>