<?php
include("Alien.php");

$A1 = new Alien("Martinus");
$A2 = new Alien("Saturnino");
$A3 = new Alien("Lunero");
$A4 = new Alien("Venusiano");
$A5 = new ALien("Jupitero");

echo $A1->muestraInfo().$A2->muestraInfo().$A3->muestraInfo().$A4->muestraInfo().$A5->muestraInfo();

echo "</br> -Número de aliens: ".Alien::getNumberOfAliens()."</br>";


?>