<?php

function contarVocales($stringCualquiera){

    $vocalesIni = 0;

    $stringCualquiera = strtolower($stringCualquiera);

    $longitud = strlen($stringCualquiera);

    for($indice=0; $indice<$longitud; $indice++){
        if(in_array($stringCualquiera[$indice], ["a", "á", "e", "é", "i", "í", "o", "ó", "u","ú"])) {
            $vocalesIni++;
        }
    }
    return $vocalesIni;
}


function obtenerVocales($stringCualquiera){
    $vocales=array();

    $longitud = strlen($stringCualquiera);

    for($indice=0; $indice<$longitud; $indice++){
        if(in_array($stringCualquiera[$indice], ["a", "e", "i", "o", "u","A","E", "I", "O", "U"])) {
            $soloVocal =$stringCualquiera[$indice];
            array_push($vocales, $soloVocal);
        }
    }
     return $vocales;
}

?>