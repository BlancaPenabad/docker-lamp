<?php

trait CalculosCentroEstudios {

    public function numeroDeAprobados(array $notas){
        $numAprobados = 0;
        foreach($notas as $a){
            if($a>=5){
                $numAprobados++;
            }
        }
        return $numAprobados;
    }
    
    public function numeroDeSuspensos(array $notas){
        $numSuspensos = 0;
        foreach($notas as $a){
            if($a<5){
                $numSuspensos++;
            }
        }
        return $numSuspensos;
    }

    //CALCULO LA NOTA MEDIA Y LA DEVUELVO REDONDEADA A 1 DECIMAL
    public function notaMedia(array $notas){
        $suma = 0;
        $cantidadNotas = count($notas);
        foreach ($notas as $num){
            $suma +=$num;
        }
        $media = $suma / $cantidadNotas;
        return round($media, 1); //REDONDEO A 1 DECIMAL
    }


    public function toString(array $notas){
        $listaDeNotas = "";
        foreach ($notas as $nota) {
            $listaDeNotas .= "[$nota]";
        }
        return $listaDeNotas;
    }
}

?>