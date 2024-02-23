<?php
include ("CalculosCentroEstudios.php");


trait MostrarCalculos{

    public function saludo(){
        echo "¡Bienvenido al centro de cálculo!";
    }


    public function showCalculusStudyCenter(array $grades){

        $calculos = new class{
            use CalculosCentroEstudios;

        };

        //$calculos = new  CalculosCentroEstudios;
        echo "</br>Notas: ".$calculos->toString($grades)."</br>";
        echo "</br>Nota media: ".$calculos->notaMedia($grades)."</br>";
        echo "</br>Número de asignaturas aprobadas: ".$calculos->numeroDeAprobados($grades)."</br>";
        echo "</br>Número de asignaturas suspensas: ".$calculos->numeroDeSuspensos($grades)."</br>";
        
        
    }
}

?>