<?php

include ("NotasDaw.php");

$notasEj = new NotasDaw(array(8,5,6,7,7,4,5,3,10,8));

echo "</br>-Notas: ".$notasEj->toString()."</br>";
echo "</br>-Notas aprobadas: ".$notasEj->numeroDeAprobados()."</br>";
echo "</br>-Notas suspensas: ".$notasEj->numeroDeSuspensos()."</br>";
echo "</br>-Nota media: ".$notasEj->notaMedia()."</br>";



?>