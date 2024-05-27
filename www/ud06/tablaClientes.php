<?php

function getClientes(){
    $stmt = Flight::db()->prepare("SELECT * FROM clientes"); //Preparamos la sentencia sql de SELECT a través del Flight.
    $stmt->execute(); //Ejecutamos la sentencia anterior.
    $datos = $stmt->fetchAll(); //Recuperamos los datos en un array 'datos'.
    Flight::json($datos); //Imprimimos los datos en formato json.
}

function getCliente($id){ //El id se pone en el link http://localhost/ud06/2 
    $stmt = Flight::db()->prepare("SELECT * FROM clientes WHERE id=?");

    $stmt->bindParam(1, $id);
    $stmt->execute();
    $datos = $stmt->fetch();
    Flight::json($datos);
    
}


function addCliente(){
   $nombre = Flight::request()->data->nombre;
   $apellidos = Flight::request()->data->apellidos;
   $edad = Flight::request()->data->edad;
   $email = Flight::request()->data->email;
   $telefono = Flight::request()->data->telefono;

   $sql = "INSERT INTO clientes (nombre, apellidos, edad, email, telefono)
   VALUES (:nombre, :apellidos, :edad, :email, :telefono)"; //Sentencia de insert.

   $stmt = Flight::db()->prepare($sql); //Preparamos la consulta con Flight.

   $stmt->bindParam(':nombre', $nombre);
   $stmt->bindParam(':apellidos', $apellidos);
   $stmt->bindParam(':edad', $edad);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':telefono', $telefono); //Inserción de datos.

   $stmt->execute(); //Ejecutar sentencia.

   Flight::json(["Nuevo cliente añadido correctamente."]); //Mensaje final en formato json
}

function deleteCliente(){
    $id = Flight::request()->data->id;

    $sql = "DELETE FROM clientes WHERE id=?";

    $stmt = Flight::db()->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->execute();

    Flight::json(["Cliente con id=$id eliminado correctamente."]); 

}


function modificaCliente(){
    $id = Flight::request()->data->id;
    $apellido = Flight::request()->data->apellidos;
    $edad = Flight::request()->data->edad;
    $email = Flight::request()->data->email;
    $telefono = Flight::request()->data->telefono;

    $sql = "UPDATE clientes SET apellidos=?, edad=?, email=?, telefono=? WHERE id=?";
    $stmt = Flight::db()->prepare($sql);

    $stmt->bindParam(1, $apellido);
    $stmt->bindParam(2, $edad);
    $stmt->bindParam(3, $email);
    $stmt->bindParam(4, $telefono);
    $stmt->bindParam(5, $id);

    $stmt->execute();

    Flight::json(["Cliente actualizado correctamente."]); 





}

?>