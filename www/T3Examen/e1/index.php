<?php

require 'flight/Flight.php';
require 'flight/autoload.php';
require 'tablaCustomers.php';

Flight::register('db', 'PDO', array('mysql:host=db;dbname=classicmodels','root','test')); 


Flight::route('GET /customers', 'getCustomers');
Flight::route('GET /customers/@customerNumber', 'getCustomer');
Flight::route('POST /customers', 'addCustomer');
Flight::route('DELETE /customers', 'deleteCustomer');
Flight::route('PUT /customers', 'modificaPhone');



Flight::start();
?>