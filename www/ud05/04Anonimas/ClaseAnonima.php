<?php

$claseAnonima = new Class($base = 0, $altura =0){
    //$claseAnonima = new Class(){

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
    /*
    public function area($base, $altura){
        $area = ($base*$altura)/2;
        return $area;
    }
    */
    public function perimetro(){
        $perimetro = (2*$this->base+2*$this->altura);
        return $perimetro;
    }
    /*
    public function perimetro($base, $altura){
        $perimetro = (2*$base+2*$altura);
        return $perimetro;
    }
    */
}
?>