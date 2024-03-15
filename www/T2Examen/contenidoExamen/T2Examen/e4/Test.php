<?php

include("Perro.php");
include("Gato.php");

//CREO UN OBJETO PERRO Y UN OBJETO GATO
$p1 = new Perro("Firulais", 4);
$g1 = new Gato("Michi", 7);


//FUNCIONALIDADES
echo "PRUEBA EJERCICIO 4:</br>";
echo $p1->obtenerNombre();
$p1->emitirSonido();
echo $g1->obtenerNombre();
$g1->emitirSonido();

?>