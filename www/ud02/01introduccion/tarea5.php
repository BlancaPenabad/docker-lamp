<?php
/*1. Escribe un programa que pase de grados Fahrenheit a Celsius. 
Para pasar de Fahrenheit a Celsius se resta 32 a la temperatura, 
se multiplica por 5 y se divide entre 9.*/
echo "<b>EJERCICIO 1</b><br>";
$fahrenheit = 80;
$celsius=($fahrenheit - 32)*5/9;
echo $celsius,"</br>"," ","</br>";

/*2. Crea un programa en PHP que declare e inicialice dos 
variables x e y con los valores 20 y 10 respectivamente y
muestre la suma, la resta, la multiplicación, 
la división y el módulo de ambas variables. */
/*(Optativo) Haz dos versiones de este ejercicios.
    - Guarda los resultados en nuevas variables.
    - Sin utilizar variables intermedias. */
$x=20;
$y=10;
echo "<b>EJERCICIO 2</b> <br>X =", $x, " Y=",$y,"</br>";
echo " ","</br>";

$suma = $x + $y ;
echo "Suma: ",$suma,"</br>";

$resta = $x - $y ;
echo "Resta: ",$resta,"</br>";

$multiply = $x * $y ;
echo "Multiplicación: ",$multiply,"</br>";

$division = $x / $y ;
echo "División: ",$division,"</br>"," ","</br>";

/*3. (Optativo) Escribe un programa que imprima por pantalla los cuadrados de los 
30 primeros números naturales.*/ 
echo "<b>EJERCICIO 3</b> </br>" ;

for($i = 1; $i <= 30; $i++){
	echo "El cuadrado de ".$i." es ".($i*$i)."</br>";
}
echo " ","</br>";

/*4. Hacer un programa php que calcule el área y el perímetro de un rectángulo
 (```área=base*altura``` y (```perímetro=2*base+2*altura```). Debéis declarar 
 las variables base=20 y altura=10. */
$base=20;
$altura=10;
echo "<b>EJERCICIO 4</b> <br>Base rectángulo =", $base," Altura rectángulo=",$altura,"</br>";


$area = ($base*$altura);
$perimetro = (2*$base+2*$altura);
echo "Área: ", $area, "<br>","Perímetro: ", $perimetro;
?>