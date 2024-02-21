<?php
include("Operario.php");

$O1 = new Operario("Fátima", 2500,"partido");
$O2 = new Operario("Blanca", 1700, "diurno");
$O3 = new Operario("Iria", 1800, "nocturno");
$O4 = new Operario("Raquel", 1700, "diurno");
 
//MUESTRO EL CONTADOR DE EMPLEADOS
echo "</br>-Número de empleados: ".Empleado::$numEmpleados."</br>";

//MUESTRO DATOS DE EMPLEADOS, ALGUNOS USANDO EL MÉTODO muestraInfo() Y OTROS MEDIANTE GETTERS
echo "</br>-Datos de los empleados:";
echo $O1->muestraInfo();
echo $O2->muestraInfo();
echo "</br>Nombre: ".$O3->getNombre()."</br>Salario: ".$O3->getSalario()."</br> Turno: ".$O3->getTurno()."</br>";
echo "</br>Nombre: ".$O4->getNombre()."</br>Salario: ".$O4->getSalario()."</br> Turno: ".$O4->getTurno()."</br>";


?>