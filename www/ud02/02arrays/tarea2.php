<?php 

/*
Necesitamos almacenar la siguiente información en un array multidimensional:

- **John**
    - email: `john@demo.com`
    - website: `www.john.com`
    - age: `22`
    - password: `pass`
- **Anna**
    - email: `anna@demo.com`
    - website: `www.anna.com`
    - age: `24`
    - password: `pass`
- **Peter**
    - email: `peter@mail.com`
    - website: `www.peter.com`
    - age: `42`
    - password: `pass`
- **Max**
    - email: `max@mail.com`
    - website: `www.max.com`
    - age: `33`
    - password: `pass`

Almacena e imprime la información. 
*/

//Array con los datos:
$datos = [
    ["Nombre" => "John", "email" => "john@demo.com", "website" => "www.john.com", "age" => "22", "password" => "pass"],
    ["Nombre" => "Anna", "email" => "anna@demo.com", "website" => "www.anna.com", "age" => "24", "password" => "pass"],
    ["Nombre" => "Peter", "email" => "peter@mail.com", "website" => "www.peter.com", "age" => "42", "password" => "pass"],
    ["Nombre" => "Max", "email" => "max@mail.com", "website" => "www.max.com", "age" => "33", "password" => "pass"]
];
//Imprimo los datos con una sentencia de control FOR:
echo "Datos: </br>";
for($i=0; $i<4;$i++){
    echo "Name: {$datos[$i]["Nombre"]}"." / Email: "."{$datos[$i]["email"]}"." / Website: "."{$datos[$i]["website"]}"." / Age: "."{$datos[$i]["age"]}"." / Password: "."{$datos[$i]["password"]}"." "."</br>";
}

?>