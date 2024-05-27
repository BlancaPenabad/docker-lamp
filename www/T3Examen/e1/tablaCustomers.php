<?php

//Función que muestra todos los datos de la tabla customers:
function getCustomers(){
    $stmt = Flight::db()->prepare("SELECT * FROM customers");
    $stmt->execute();
    $customers = $stmt->fetchAll();
    Flight::json($customers);
}



//Función que muestra un sólo customer a través de su customerNumber:
function getCustomer($customerNumber){
    $stmr = FLight::db()->prepare("SELECT * FROM customers WHERE customerNumber=?");
    $stmt->bindParam(1,$customerNumber);
    $stmt->execute();
    $customer = $stmt->fetch();
    Flight::json($datos);
}

?>