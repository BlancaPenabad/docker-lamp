<?php
include("Jugador.php");

$J1 = new Jugador("Fulanito", 20, "Portero");
$J2 = new Jugador("Menganito", 19, "Delantero");
$J3 = new Jugador("Sutanito", 22, "Defensa");

//VUELVO A SETTEAR ALGUNOS DATOS PARA CERCIORARME DE QUE FUNCIONAN LOS SETTERS
$J2->setEdad(27);
$J3->setPosicionCampo("Centrocampista");

/*MUESTRO DATOS DE LOS JUGADORES CREADOS MEDIANTE EL USO
DEL MÉTODO info() Y DE LOS GETTERS Y SETTERS HEREDADOS*/
echo "</br>-Datos de los jugadores:";
echo $J1->info();
echo $J2->info();
echo "</br>Nombre: ".$J3->getNombre()."</br>Edad: ".$J3->getEdad()."</br> Posición campo: ".$J3->getPosicionCampo()."</br>";


?>