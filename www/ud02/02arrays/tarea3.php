<?php 

/*
1. Crea una matriz con 30 posiciones y que contenga números aleatorios entre 0 y 20 (inclusive).
Uso de la función [rand](https://www.php.net/manual/es/function.rand.php). 
Imprima la matriz creada anteriormente.
*/ 

//Creo array:
$numeros = array();

for ($x=0;$x<30;$x++) {
    $aleatorio = rand(0,20);
    array_push($numeros,$aleatorio);
  }

 //Muestro los números 
 echo "<b>EJERCICIO 1</b> </br>" ;
 echo "Array de 30 números aleatorios: </br>";
  foreach($numeros as $num){
    echo $num."</br>";
}
echo" "."</br>";
/* 
2. (Optativo) Cree una matriz con los siguientes datos: 
`Batman`, `Superman`, `Krusty`, `Bob`, `Mel` y `Barney`.
    - Elimine la última posición de la matriz. 
    - Imprima la posición donde se encuentra la cadena 'Superman'. 
    - Agregue los siguientes elementos al final de la matriz: `Carl`, `Lenny`, `Burns` y `Lisa`. 
    - Ordene los elementos de la matriz e imprima la matriz ordenada. 
    - Agregue los siguientes elementos al comienzo de la matriz: `Apple`, `Melon`, `Watermelon`.
*/

echo "<b>EJERCICIO 2</b> </br>" ;
 echo "Personajes: </br>";
$datos = ["Batman", "Superman", "Krusty", "Bob", "Mel", "Barney"];
foreach($datos as $d){
    echo $d."  ";
}

echo" "."</br>"." "."</br>";
echo "Elimino la última posición. Resultado: </br>";
$personajes = array_pop($datos);
foreach($datos as $d){
    echo $d."  ";
}

echo" "."</br>"." "."</br>";
echo "Posición donde se encuentra \"Superman\": </br>";
$key = array_search("Superman",$datos);
    echo $key;

  
echo" "."</br>"." "."</br>";
echo "Añado nuevos personajes al final del array. Resultado: </br>";
array_push($datos,"Carl","Lenny","Burns","Lisa");
foreach($datos as $d){
    echo $d."  ";
}

echo" "."</br>"." "."</br>";
echo "Ordeno alfabéticamente el array. Resultado: </br>";
asort($datos);
foreach($datos as $d){
    echo $d."  ";
}

echo" "."</br>"." "."</br>";
echo "Añado nuevos datos al comienzo del array. Resultado: </br>";
array_unshift($datos,"Apple","Melon","Watermelon");
foreach($datos as $d){
    echo $d."  ";
}



/*3. (Optativo) Cree una copia de la matriz con el nombre `copia` con elementos del 3 al 5.
    - Agregue el elemento 'Pera' al final de la matriz. */ 

echo" "."</br>"." "."</br>";
echo "Nuevo array \"Copia\" con los elementos del 3 al 5. Añado \"Pera\" al final del nuevo array. Resultado: </br>";
$copia = array_slice($datos, 3, 5); 
array_push($copia,"Pera");
foreach($copia as $c){
    echo $c."  ";
}
?>