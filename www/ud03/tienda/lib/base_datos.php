<?php

global $connection;


/*Función para establecer la conexión con la BD (MySQL orientado a objetos) y 
control de posibles errores */
function get_connection(){
    global $connection;
    @$connection = new mysqli('db', 'root', 'test', 'dbname');
    $error = $connection->connect_errno;
    if($connection->connect_error){
        die("Fallo en la conexión: ".$connection->connect_error." con número ".$error);
    }
    echo "Conexión correcta";
    
}

//Función para cerrar la conexión
function del_connection(){
    global $connection;
    if($connection){
        $connection->close();
    }
}

function crear_bd_tienda(){
    //Código para creación de bd
}