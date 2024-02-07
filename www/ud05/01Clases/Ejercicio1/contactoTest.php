<?php
include("contacto.php");

$C1 = new Contacto("Blanca", "Penabad Villar","555555555");
$C2 = new Contacto("Fátima", "Sánchez Blanco", "666666666");
$C3 = new Contacto("Iria", "Pérez García", "777777777");

//Muestro información usando el método muestraInformación():
echo $C1->muestraInformacion()."</br></br>";
echo $C2->muestraInformacion()."</br></br>";
echo $C3->muestraInformacion()."</br></br>";

//Muestro información usando los GETTERS:
echo "Nombre: ".$C1->get_nombre()."</br>Apellidos: ".$C1->get_apellido()."</br>Número de teléfono: ".$C1->get_numTelefono()."</br>";
echo "Nombre: ".$C2->get_nombre()."</br>Apellidos: ".$C2->get_apellido()."</br>Número de teléfono: ".$C2->get_numTelefono()."</br>";
echo "Nombre: ".$C3->get_nombre()."</br>Apellidos: ".$C3->get_apellido()."</br>Número de teléfono: ".$C3->get_numTelefono()."</br>";


?>