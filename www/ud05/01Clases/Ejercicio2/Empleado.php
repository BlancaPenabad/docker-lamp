<?php
class Empleado {

//PROPIEDADES
public $nombre;
public $salario;
public static $numEmpleados = 0;

//CONSTRUCTOR QUE INCREMENTA EL CONTADOR DE EMPLEADOS  Y CONTROLA EL SALARIO. 
//SI EL SALARIO SUPERA LOS 2000€, SALTA UN AVISO Y NO SE CREA EL OBJETO.
function __construct($nombre, $salario){
    if($salario<2000){
        $this->nombre = $nombre;
        $this->salario = $salario;

        self::$numEmpleados++;
    }else{
        echo "El salario no puede ser mayor a 2000€";
        
    }
    
}

//MÉTODOS
public function setNombre($nombre) {
    $this->nombre=$nombre;  
}
public function getNombre(){
    return $this->nombre;
}
/*
public function setSalario($salario) {
    if($salario<2000){
        $this->salario=$salario;  
    }else{
        echo "El salario no puede ser superior a 2000€.";
    }
}
*/
public function getSalario(){
    return $this->salario;
}

//MÉTODO QUE MUESTRA TODA LA INFOMACIÓN DE UN OBJETO
function muestraInfo(){
    return "</br>Nombre: ".$this->nombre."</br>Salario: ".$this->salario."</br>";
}
}


?>