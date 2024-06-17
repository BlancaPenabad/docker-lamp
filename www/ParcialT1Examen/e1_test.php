<?php
include('e1.php');
$stringCualquiera = "Esto es un string cualquiera";
echo "Dado el siguiente string: ".$stringCualquiera."</br>";
echo "Función que cuenta vocales: ".contarVocales($stringCualquiera)."</br>";
echo "Función que imprime vocales: ";
$miArray = obtenerVocales($stringCualquiera);
foreach ($miArray as $v) {
    echo $v;
}

?>