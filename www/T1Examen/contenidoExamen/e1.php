<?php


$arrayBol=[];

function isPar($arr){

    $arrayBol=[];
    foreach ($arr as $a){
        if(is_numeric($a) && $a%2==0){
            array_push($arrayBol, "true");        
        }else if(is_numeric($a)){
            array_push($arrayBol, "false");        

        }else{
            array_push($arrayBol, "false");
        }
    }

    foreach($arrayBol as $aBol){
        echo $aBol." ";
    }
}

function isImpar($arr){

    $arrayBol=[];
    foreach ($arr as $a){
        if(is_numeric($a) && $a%2==0){
            array_push($arrayBol, "false");        
        }else if(is_numeric($a)){
            array_push($arrayBol, "true");        

        }else{
            array_push($arrayBol, "false");
        }
    }

    foreach($arrayBol as $aBol){
        echo $aBol." ";
    }
}



?>