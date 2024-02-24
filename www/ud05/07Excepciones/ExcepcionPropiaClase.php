<?php
include ("ExcepcionPropia.php");

class ExcepcionPropiaClase extends ExcepcionPropia{

    static function testNumber($num){
        if($num == 0){
            throw new ExcepcionPropia("</br>El número es 0.</br>");
        }else{
            echo "</br>El número es ".$num."</br>";
        }
        
    }
}


?>