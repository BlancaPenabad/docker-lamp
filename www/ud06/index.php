<?php

// require 'flight/Flight.php';
require 'flight/autoload.php';
require 'tablaClientes.php';
require 'tablaHoteles.php';
require 'tablaReservas.php';

Flight::register('db', 'PDO', array('mysql:host=db;dbname=pruebas','root','test'));

//Tabla clientes
Flight::route('GET /clientes', 'getClientes'); //Para consultar datos usamos el método GET
Flight::route('POST /clientes', 'addCliente'); //Para añadir datos usamos el método POST.
Flight::route('DELETE /clientes', 'deleteCliente');
Flight::route('PUT /clientes', 'modificaCliente');
Flight::route('GET /cliente', 'getCliente'); 


//Tabla hoteles
Flight::route('GET /hoteles', 'getHoteles');
Flight::route('POST /hoteles', 'addHotel');
Flight::route('DELETE /hoteles', 'deleteHotel');
Flight::route('PUT /hoteles', 'modificarHotel');


//Tabla reservas
Flight::route('GET /reservas', 'getReservas');
Flight::route('POST /reservas', 'addReserva');
Flight::route('DELETE /reservas', 'deleteReserva');







Flight::start();
