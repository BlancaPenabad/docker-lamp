<?php



include("Figura.php");

class Rectangulo extends Figura{

    private $ancho;
    private $alto;

    public function __construct($ancho, $alto){
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    //GETTERS Y SETTERS:

    function setAncho($ancho){
        $this->ancho=$ancho;
    }

    function setAlto($alto){
        $this->alto=$alto;
    }

    function getAncho(){
        return $this->ancho;
    }

    function getAlto(){
        return $this->alto;
    }

    
    public function dibujar(){
        echo"</br>Se dibuja la figua rectángulo:</br>
        Ancho ".$this->getAncho()."</br>
        Alto ".$this->getAlto()."</br>";

    }

    public function agrandar($factor){
        $anchoG = ($this->ancho)*$factor;
        $altoG = ($this->alto)*$factor;
        $this->setAncho($anchoG);
        $this->setAlto($altoG);


        return("</br>Lo agrando por ".$factor.":</br>Ancho: ".$anchoG."</br>Alto: ".$altoG."</br>");

    }

    public function encoger($factor){
        $anchoE = ($this->ancho)/$factor;
        $altoE = ($this->alto)/$factor;
        $this->setAncho($anchoE);
        $this->setAlto($altoE);

        return("</br>Lo encojo entre ".$factor.":</br>Ancho: ".$anchoE."</br>Alto: ".$altoE."</br>");
    }
}
