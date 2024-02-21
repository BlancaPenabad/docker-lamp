<?php
include("Arbitro.php");

//CREO 3 OBJETOS ÁRBITRO
$A1 = new Arbitro("Arbitro1", 30, 2);
$A2 = new Arbitro("Arbitro2", 35, 5);
$A3 = new Arbitro("Arbitro3", 33, 7);

//VUELVO A SETTEAR ALGUNOS DATOS PARA CERCIORARME DE QUE FUNCIONAN LOS SETTERS
$A1->setNombre("Manolo");
$A2->setEdad(39);
$A3->setAnyos(10);


/*MUESTRO DATOS DE LOS JUGADORES CREADOS MEDIANTE EL USO
DEL MÉTODO info() Y DE LOS GETTERS Y SETTERS HEREDADOS*/
echo "</br>-Datos de los árbitros:";
echo $A1->info();
echo $A2->info();
echo "</br>Nombre: ".$A3->getNombre()."</br>Edad: ".$A3->getEdad()."</br> Años arbitrando: ".$A3->getAnyos()."</br>";


?>