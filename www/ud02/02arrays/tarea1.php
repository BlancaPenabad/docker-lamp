<?php 

//1. Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea utilizando los valores contenidos en el array.
echo "<b>EJERCICIO 1</b> </br>" ;
echo "Números pares del 0 al 10: </br>";
$pares =[0,2,4,6,8,10];

for($i=0; $i<6;$i++){
    echo $pares[$i]."</br>";
}
echo " "."</br>";

/* 2. Imprime los valores del array asociativo siguiente usando un foreach:*/
$v[1]=90;
$v[10] = 200;
$v['hola']=43;
$v[9]='e';

echo "<b>EJERCICIO 2</b> </br>" ;
echo "Valores del array: </br>";


foreach($v as $num){
    echo $num."</br>";
}
?>