<?php

class Usuario{

    //PROPIEDADES
    private $id;
    private $nombre;
    private $apellidos;
    private $edad;
    private $provincia;
    private $password;


    //CONTADOR PARA CREAR UN ID AUTOINCREMENTAL EN EL CONSTRUCTOR
    private static $idAutoIncrement = 0;

    //CONSTRUCTOR
    function __constructor($nombre, $apellidos, $edad, $provincia, $password){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->provincia = $provincia;
        $this->password = $password;

        self::$idAutoIncrement++;//INCREMENTO EL CONTADOR
        $this->id = self::$idAutoIncrement;//IGUALO EL ID AL CONTADOR
    }

    //GETTERS Y SETTERS
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    function setEdad($edad){
        $this->edad = $edad;
    }

    function setProvincia($provincia){
        $this->provincia = $provincia;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getEdad(){
        return $this->edad;
    }

    function getProvincia(){
        return $this->provincia;
    }

    function getPassword(){
        return $this->password;
    }

}
?>