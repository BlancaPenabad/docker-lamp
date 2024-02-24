<?php
include ("ExcepcionPropiaClase.php");
//include ("ExcepcionPropia.php");

try{
    ExcepcionPropiaClase::testNumber(4);
    ExcepcionPropiaClase::testNumber(0);


}catch (ExcepcionPropia $e){
    echo $e->getMessage();
}



?>