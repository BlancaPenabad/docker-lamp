<?php
include("Empleado.php");

$E1 = new Empleado("Blanca", 4000);
$E2 = new Empleado ("Fátima", 1900);
$E3 = new Empleado("Iria", 1750);
$E4 = new Empleado("Raquel", 1750);
$E5 = new Empleado("Xulio", 1950);

//MUESTRO EL CONTADOR DE EMPLEADOS
echo "</br>Número de empleados: ".Empleado::$numEmpleados."</br>";


//MUESTRO DATOS DE EMPLEADOS, ALGUNOS USANDO EL MÉTODO muestraInfo() Y OTROS MEDIANTE GETTERS
echo "</br>-Datos de los empleados:";
echo $E1->muestraInfo();
echo $E2->muestraInfo();
echo $E3->muestraInfo();
echo "</br>Nombre: ".$E4->getNombre()."</br>Salario: ".$E4->getSalario()."</br>";
echo "</br>Nombre: ".$E5->getNombre()."</br>Salario: ".$E5->getSalario()."</br>";



?>