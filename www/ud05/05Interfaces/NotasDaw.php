<?php

include("Notas.php");


class NotasDaw extends Notas implements CalculosCentroEstudios{

    
    public function __construct(array $notas){
        parent::__construct($notas);
    }

    public function numeroDeAprobados(){
         $numAprobados = 0;
        foreach($this->getNotas() as $a){
            if($a>=5){
                $numAprobados++;
            }
            
        }
        return $numAprobados;
    }
    public function numeroDeSuspensos(){
        $numSuspensos = 0;
    foreach($this->getNotas() as $a){
        if($a<5){
            $numSuspensos++;
        }
    }
    return $numSuspensos;
}
//CALCULO LA NOTA MEDIA Y LA DEVUELVO REDONDEADA A 1 DECIMAL
    public function notaMedia(){

        $suma = 0;
        $cantidadNotas = count($this->getNotas());
        foreach ($this->getNotas() as $num){
            $suma += $num;
        }
        $media = $suma / $cantidadNotas; 
        return round($media,1); //REDONDEO A 1 DECIMAL

    }


//FUNCIÓN QUE PASA EL ARRAY A STRING Y LO DEVUELVE
    public function toString(){
        $listaDeNotas = "";
        foreach ($this->getNotas() as $nota) {
            $listaDeNotas .= "[$nota]";
        }
        return $listaDeNotas;
    }
}

?>