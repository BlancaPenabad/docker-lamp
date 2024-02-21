<?php

abstract class Persona{

    protected $id;
    protected $nombre;
    protected $apellidos;

    public function __construct($id, $nombre, $apellidos){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
        
    
    abstract function getId();
    abstract function getNombre();
    abstract function getApellidos();

    abstract function setId($id);
    abstract function setNombre($nombre);
    abstract function setApellidos($apellidos);

    abstract function accion();
}

?>