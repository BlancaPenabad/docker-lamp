<?php

function getClientes(){
    $stmt = Flight::db()->prepare("SELECT * FROM clientes"); //Preparamos la sentencia sql de SELECT a través del Flight.
    $stmt->execute(); //Ejecutamos la sentencia anterior.
    $datos = $stmt->fetchAll(); //Recuperamos los datos en un array 'datos'.
    Flight::json($datos); //Imprimimos los datos en formato json.
}


function addCliente(){
   $nombre = Flight::request()->data->nombre;
   $apellidos = Flight::request()->data->apellidos;
   $edad = Flight::request()->data->edad;
   $email = Flight::request()->data->email;
   $telefono = Flight::request()->data->telefono;

   $sql = "INSERT INTO clientes (nombre, apellidos, edad, email, telefono)
   VALUES (:nombre, :apellidos, :edad, :email, :telefono)"; //Sentencia de insert.

   $stmt = FLight::db()->prepare($sql); //Preparamos la consulta con Flight.

   $stmt->bindParam(':nombre', $nombre);
   $stmt->bindParam(':apellidos', $apellidos);
   $stmt->bindParam(':edad', $edad);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':telefono', $telefono); //Inserción de datos.

   $stmt->execute(); //Ejecutar sentencia.

   Flight::json(["Nuevo cliente añadido correctamente"]);
}

?>