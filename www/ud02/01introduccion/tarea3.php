<?php

//Busca en la documentación de PHP las funciones de [manejo de variables](http://www.php.net/manual/es/funcref.php)

//Comprueba el resultado devuelto por los siguientes fragmentos de código y analiza el resultado:


 $a = "true"; // imprime el valor devuelto por is_bool($a)...
 echo is_bool($a)."<br>"; 
 //El resultado es una cadena vacía ya que detecta un string (por las comillas) y no un booleano.
 

 $c = "false"; // imprime el valor devuelto por gettype($c);
 echo gettype($c)."<br>"; 
 /*Muy relacionado con el ejemplo anterior, esta función indica que la variable $c es un STRING. 
 Si eliminásemos las comillas, entonces la variable sería un valor BOOLEANO.*/


 $d = ""; // el valor devuelto por empty($d);
 echo empty($d)."<br>"; 
 /*La anterior función devuelve un 1, que significa TRUE... 
 es decir, que $d, que es un string vacío SÍ se considera una variable vacía. 
 */


 $e = 0.0; // el valor devuelto por empty($e);
 echo empty($e)."<br>"; 
/*La anterior función devuelve un 1 por lo que deduzco
 que la variable float $e SÍ se considera una variable vacía. 
 */


 $f = 0; // el valor devuelto por empty($f);
 echo empty($f)."<br>"; 
/*La anterior función devuelve un 1 por lo que deduzco
 que una variable integer a 0 también se considera una variable vacía. 
 */


 $g = false; // el valor devuelto por empty($g);
 echo empty($g)."<br>"; 
 /*La anterior función devuelve un 1 por lo que deduzco
 que una variable booleana que sea false se considera como variable vacía. 
 */


 $h; // el valor devuelto por empty($h);
 echo empty($h)."<br>"; 
 /*La anterior función devuelve un 1 por lo que deduzco
 que una variable que aún no ha sido definida (como $h) tiene la consideración de variable vacía. 
 */


 $i = "0"; // el valor devuelto por empty($i);
 echo empty($i)."<br>"; 
 /*La anterior función devuelve un 1, entiendo que
 un 0 como string se considera también una variable vacía. 
 */


 $j = "0.0"; // el valor devuelto por empty($j);
 echo empty($j)."<br>"; 
 /*La anterior función devuelve un espacio en blanco, por lo que se entiende
 que el string anterior NO se considera una variable vacía.
 */


 $k = true; // el valor devuelto por isset($k);
 echo isset($k)."<br>"; 
 /*La anterior función devuelve un 1. Teniendo en cuenta la documentacion de PHP, la función ISSET detecta
 si una variable está definida. La variable $s sí ha sido definida, de ahí a que devuelva un 1, que es TRUE.
 */

 $l = false; // el valor devuelto por isset($l);
 echo isset($l)."<br>"; 
 /*La anterior función también devuelve un 1. Al igual que en el ejemplo anterior, 
 la variable $l ha sido definida, de ahí a que devuelva un 1, que es TRUE.
 */

 $m = true; // el valor devuelto por is_numeric($m);
 echo is_numeric($m)."<br>";
 /*La función IS_NUMERIC detecta si una variable es un número o un string numérico. No es el caso de
 la variable $m por lo que el resultado es que nos devuelve un espacio en blanco */

 $n = ""; // el valor devuelto por is_numeric($n);
 echo is_numeric($n)."<br>";
 /*AL igual que el ejemplo anterior, la variable $n no es un número o string numérico
  por lo que el resultado que nos devuelve es un espacio en blanco */

?>