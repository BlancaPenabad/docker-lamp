<?php 

class Contacto{
    private $nombre;
    private $apellido;
    private $numTelefono;


    //Constructor
    function __construct($nombre, $apellido, $numTelefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numTelefono = $numTelefono;
    }

    //Destructor:
    function __destruct(){
        echo "Se ha destruído el contacto ".$this->nombre;
    }

    //Getters y setters
    function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    function set_apellido($apellido){
        $this->apellido = $apellido;
    }

    function set_numTelefono($numTelefono){
        $this->numTelefono = $numTelefono;
    }

    function get_nombre(){
        return $this->nombre;
    }

    function get_apellido(){
        return $this->apellido;
    }

    function get_numTelefono(){
        return $this->numTelefono;
    }

    //Método muestraInformacion():

    function muestraInformacion(){
        return "Nombre: ".$this->nombre."</br>Apellido: ".$this->apellido."</br>Número de teléfono: ".$this->numTelefono;
    }
}

?>