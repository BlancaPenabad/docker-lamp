<?php


function test_input($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

//Todos los métodos que validan en formulario:

//Función que verifica los registros requeridos:
function registroObligatorio($reg){

    return !empty($reg) && isset($reg);
}



//Función que verifican la longitud del nombre y de los apellidos:
function longitudNombre($nombre){
    return strlen($nombre) > 0 &&  strlen($nombre) <=50;
}

function longitudApellido($apellidos){
    return strlen($apellidos) > 0 &&  strlen($apellidos) <=100;

}



//Función que verifica si un campo es un string
function validarString($reg){
    return preg_match('/^[A-Za-zÁÉÍÓÚáéíóúÜüÑñ]+$/', $reg);
}



//Función que verifica si un campo es un número
function validarDigito($dig){
    return is_numeric($dig);
}


//Función que valida el límite de edad
function validarEdad($edad){
    return $edad>=0 && $edad<=100;
}



//Función que define el mensaje de bienvenida en el idioma seleccionado
function mensajeIdioma($idioma){

    $mensaje = '';
    if($idioma){
        switch ($idioma){
        case 'ES':
            $mensaje = "¡Bienvenido a mi página!";
            break;
        case 'GAL':
            $mensaje = "Benvido á miña páxina!";
            break;
        case 'ENG':
            $mensaje = "Welcome to my page!";
            break;    
        case 'FR':
            $mensaje = "Bienvenue sur ma page!";
            break;
        case 'RUS':
            $mensaje = "Добро пожаловать на мою страницу!";
            break;
        default:
            $mensaje = "";
            break;   

    }
 }
    return $mensaje;
}

?>