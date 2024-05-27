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
    $stmt = FLight::db()->prepare("SELECT * FROM customers WHERE customerNumber=?");
    $stmt->bindParam(1,$customerNumber);
    $stmt->execute();
    $customer = $stmt->fetch();
    Flight::json($customer);
}

//Función que permite insertar un customer en la base de datos:
function addCustomer(){
    $customerNumber = Flight::request()->data->customerNumber;
    $customerName = Flight::request()->data->customerName;
    $contactLastName = Flight::request()->data->contactLastName;
    $contactFirstName = Flight::request()->data->contactFirstName;
    $phone = Flight::request()->data->phone;
    $addressLine1 = Flight::request()->data->addressLine1;
    $addressLine2 = Flight::request()->data->addressLine2;
    $city = Flight::request()->data->city;
    $state = Flight::request()->data->state;
    $postalCode = Flight::request()->data->postalCode;
    $country = Flight::request()->data->country;
    $salesRepEmployeeNumber = Flight::request()->data->salesRepEmployeeNumber;
    $creditLimit = Flight::request()->data->creditLimit;

    $sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber,creditLimit)
    VALUES (:customerNumber, :customerName, :contactLastName, :contactFirstName, :phone, :addressLine1, :addressLine2, :city, :state, :postalCode, :country, :salesRepEmployeeNumber, :creditLimit)";

    $stmt = Flight::db()->prepare($sql);

    $stmt->bindParam(':customerNumber', $customerNumber);
    $stmt->bindParam(':customerName', $customerName);
    $stmt->bindParam(':contactLastName', $contactLastName);
    $stmt->bindParam(':contactFirstName', $contactFirstName);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':addressLine1', $addressLine1);
    $stmt->bindParam(':addressLine2', $addressLine2);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':state', $state);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);
    $stmt->bindParam(':creditLimit', $creditLimit);

    $stmt->execute(); 
    Flight::json(["Nuevo customer añadido correctamente."]); //Mensaje final en formato json

    
}

//Función que permite eliminar un customer:
function deleteCustomer(){
    $customerNumber = Flight::request()->data->customerNumber;
    $sql = "DELETE FROM customers WHERE customerNumber=?";

    $stmt = Flight::db()->prepare($sql);
    $stmt->bindParam(1, $customerNumber);
    $stmt->execute();

    Flight::json(["Customer con customerNumber=$customerNumber eliminado correctamente."]); 

}


//Función que permite modificar el campo phone:
    function modificaPhone(){
        $customerNumber = Flight::request()->data->customerNumber;
        $phone = Flight::request()->data->phone;

        $sql = "UPDATE customers SET phone=? WHERE customerNumber=?";
        $stmt = Flight::db()->prepare($sql);

        $stmt->bindParam(1, $phone);
        $stmt->bindParam(2, $customerNumber);

        $stmt->execute();

         Flight::json(["Customer actualizado correctamente."]); 



    }



?>