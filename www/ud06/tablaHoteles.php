<?php

function getHoteles(){
    $stmt = Flight::db()->prepare("SELECT * FROM hoteles"); //Preparamos la sentencia sql de SELECT a través del Flight.
    $stmt->execute(); //Ejecutamos la sentencia anterior.
    $datos = $stmt->fetchAll(); //Recuperamos los datos en un array 'datos'.
    Flight::json($datos); //Imprimimos los datos en formato json.
}

function addHotel(){
   $hotel = Flight::request()->data->hotel;
   $direccion = Flight::request()->data->direccion;
   $telefono = Flight::request()->data->telefono;
   $email = Flight::request()->data->email;

   $sql = "INSERT INTO hoteles (hotel, direccion, telefono, email)
   VALUES (:hotel, :direccion, :telefono, :email)"; //Sentencia de insert.

   $stmt = Flight::db()->prepare($sql); //Preparamos la consulta con Flight.

   $stmt->bindParam(':hotel', $hotel);
   $stmt->bindParam(':direccion', $direccion);
   $stmt->bindParam(':telefono', $telefono); 
   $stmt->bindParam(':email', $email);


   $stmt->execute(); //Ejecutar sentencia.

   Flight::json(["Nuevo hotel añadido correctamente."]);
}


function deleteHotel(){
    $id = Flight::request()->data->id;

    $sql = "DELETE FROM hoteles WHERE id=?";

    $stmt = Flight::db()->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->execute();

    Flight::json(["Hotel con id=$id eliminado correctamente."]); 
}

function modificarHotel(){
    $id = Flight::request()->data->id;
    $direccion = Flight::request()->data->direccion;
    $email = Flight::request()->data->email;
    $telefono = Flight::request()->data->telefono;

    $sql = "UPDATE hoteles SET direccion=?, email=?, telefono=? WHERE id=?";
    $stmt = Flight::db()->prepare($sql);

    $stmt->bindParam(1, $direccion);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $telefono);
    $stmt->bindParam(4, $id);

    $stmt->execute();

    Flight::json(["Hotel actualizado correctamente."]); 

}

?>