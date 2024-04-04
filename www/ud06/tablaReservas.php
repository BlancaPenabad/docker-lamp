<?php

function getReservas(){
    $stmt = Flight::db()->prepare("SELECT * FROM reservas"); //Preparamos la sentencia sql de SELECT a través del Flight.
    $stmt->execute(); //Ejecutamos la sentencia anterior.
    $datos = $stmt->fetchAll(); //Recuperamos los datos en un array 'datos'.
    Flight::json($datos); //Imprimimos los datos en formato json.
}

function addReserva(){
   $id_cliente = Flight::request()->data->id_cliente;
   $id_hotel = Flight::request()->data->id_hotel;
   $fecha_reserva= Flight::request()->data->fecha_reserva;
   $fecha_entrada = Flight::request()->data->fecha_entrada;
   $fecha_salida = Flight::request()->data->fecha_salida;

   $sql = "INSERT INTO reservas (id_cliente, id_hotel, fecha_reserva, fecha_entrada, fecha_salida)
   VALUES (:id_cliente, :id_hotel, :fecha_reserva, :fecha_entrada, :fecha_salida)"; //Sentencia de insert.

   $stmt = Flight::db()->prepare($sql); //Preparamos la consulta con Flight.

   $stmt->bindParam(':id_cliente', $id_cliente);
   $stmt->bindParam(':id_hotel', $id_hotel);
   $stmt->bindParam(':fecha_reserva', $fecha_reserva);
   $stmt->bindParam(':fecha_entrada', $fecha_entrada); 
   $stmt->bindParam(':fecha_salida', $fecha_salida);


   $stmt->execute(); //Ejecutar sentencia.

   Flight::json(["Nueva reserva añadida correctamente."]);
}

function deleteReserva(){
    $id = Flight::request()->data->id;

    $sql = "DELETE FROM reservas WHERE id=?";

    $stmt = Flight::db()->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->execute();

    Flight::json(["Reserva con id=$id eliminada correctamente."]); 

}

function modificarReserva(){
    $id = Flight::request()->data->id;
    $fecha_entrada = Flight::request()->data->fecha_entrada;
    $fecha_salida = Flight::request()->data->fecha_salida;

    $sql = "UPDATE reservas SET fecha_entrada=?, fecha_salida=? WHERE id=?";
    $stmt = Flight::db()->prepare($sql);

    $stmt->bindParam(1, $fecha_entrada);
    $stmt->bindParam(2, $fecha_salida);
    $stmt->bindParam(3, $id);

    $stmt->execute();

    Flight::json(["Reserva actualizada correctamente."]); 

}

?>