<?php
include ("ClaseAnonima.php");


$anonima1 = clone $claseAnonima;
$anonima1->__construct(6,3);
echo "</br>BASE=6 ALTURA=3</br>Cálculos:</br>";
echo "</br>ÁREA: ".$anonima1->area()."</br>";
echo "</br>PERÍMETRO: ".$anonima1->perimetro()."</br>";


$anonima2 = clone $claseAnonima;
$anonima2->__construct(10,5);
echo "</br>BASE=10 ALTURA=5</br>Cálculos:</br>";
echo "</br>ÁREA: ".$anonima2->area()."</br>";
echo "</br>PERÍMETRO: ".$anonima2->perimetro()."</br>";


//OTRA FORMA DE HACERLO SIN CREAR OBJETOS NUEVOS Y
//MEDIANTE MÉTODOS QUE ACEPTAN PARÁMETROS
/*
print "BASE: 6</br>ALTURA: 3</br>Cálculos:</br>";
print "</br>Área: ".$claseAnonima->area(6,3)."</br>";
print "</br>Perímetro: ".$claseAnonima->perimetro(6,3)."</br>";

print "</br>BASE: 9</br>ALTURA:3</br>Cálculos:</br>";
print "</br>Área: ".$claseAnonima->area(9,3)."</br>";
print "</br>Perímetro: ".$claseAnonima->perimetro(9,3)."</br>";

*/
?>