<?php

require "Empleado.php";

class Operario extends Empleado{

    //PROPIEDADES
    private $turno;

    //CONSTRUCTOR QUE INLCUYE LA PROPIEDAD DE LA CLASE HIJA
    function __construct($nombre, $salario, $turno){
            parent::__construct($nombre, $salario);
            $this->setTurno($turno);
    
        }

        //SETETR QUE VERIFICA SI EL TURNO ES VÁLIDO
        public function setTurno($turno) {
            if($turno == "diurno" ||$turno == "nocturno"){
                $this->turno=$turno;  
            }else{
                echo "</br>Sólo existen turnos diurnos y nocturnos.";
            }
        }

        public function getTurno(){
            return $this->turno;
        }
    
        //MÉTODO QUE MUESTRA INFORMACIÓN:
        function muestraInfo(){
            return "</br>Nombre: ".$this->nombre."</br>Salario: ".$this->salario."</br>Turno: ".$this->turno."</br>";
        }
        
    }

    


?>