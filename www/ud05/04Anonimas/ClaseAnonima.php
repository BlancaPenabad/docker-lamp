<?php

$claseAnonima = new Class($base = 0, $altura =0){

    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area(){
        $area = ($this->base*$this->altura)/2;
        return $area;
    }

    public function perimetro(){
        $perimetro = (2*$this->base+2*$this->altura);
        return $perimetro;
    }
}

?>