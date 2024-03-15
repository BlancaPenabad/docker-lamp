<?php
include("Rectangulo.php");


//CREO UN OBJETO RECTÁNGULO
$R1 = new Rectangulo(24, 12);


//FUNCIONALIDADES
echo "PRUEBA EJERCICIO 3:</br>";
$R1->dibujar();
echo $R1->agrandar(2);
echo $R1->encoger(4);
$R1->dibujar();
echo $R1->agrandar(5);
echo $R1->encoger(2);
$R1->dibujar();

?>