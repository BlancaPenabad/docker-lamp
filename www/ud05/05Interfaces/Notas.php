<?php

include("CalculosCentroEstudios.php");

abstract class Notas implements CalculosCentroEstudios{

    private $notas;


    public function __construct(array $notas){
        $this->notas = $notas;
    }


    public function getNotas(){
        return $this->notas;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }

    abstract function toSTring();

    abstract function numeroDeAprobados();
    abstract function numeroDeSuspensos();
    abstract function notaMedia();

    
}

?>