<?php

include("Persona.php");

class Administrador extends Persona{

     public function __construct($id, $nombre, $apellidos){

        parent::__construct($id, $nombre, $apellidos);
     }
        
    
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function accion(){
        echo "</br>Id: ".$this->getId()."</br>Nombre: ".$this->nombre."</br>Apellidos: ".$this->apellidos."</br>Administrador.";
    }
}

?>