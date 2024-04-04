<?php

// require 'flight/Flight.php';
require 'flight/autoload.php';
require 'tablaClientes.php';

Flight::register('db', 'PDO', array('mysql:host=db;dbname=pruebas','root','test'));

Flight::route('GET /clientes', 'getClientes');

Flight::start();
