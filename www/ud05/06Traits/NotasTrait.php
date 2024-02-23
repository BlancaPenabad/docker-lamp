<?php
include("MostrarCalculos.php");
//include("CalculosCentroEstudios.php");

class NotasTrait{
    use CalculosCentroEstudios, MostrarCalculos;

    private $notas;

    public function __construct(array $notas){
        $this->notas = $notas;
    }

    public function getNotas(){
        return $this->notas;
    }
   
}
$nt = new NotasTrait([10,8,5,6,4,7,7,8]);
$nt->showCalculusStudyCenter($nt->getNotas());

?>