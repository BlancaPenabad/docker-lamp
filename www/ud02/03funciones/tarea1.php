<?php 

// 1. Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.
function esDigito($d){
    if(is_numeric($d)){
        if(($d>=0) && ($d<=10)){
            return "true";
        }
    return "false";
 } 
}
echo esDigito(7);

echo" "."</br>";


// 2. Crea una función que reciba un string e devolva a súa lonxitude.
function cuentaString($palabra){
    //$longitud = strlen($palabra);
     return strlen($palabra);
}
echo cuentaString("blanca");

echo" "."</br>";


// 3. Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`.
function potencia($x,$y){
    if(is_numeric($x) && is_numeric($y)){
    return pow($x,$y);
 } 
}
echo potencia(2,4);

echo" "."</br>";

// 4. Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.
function vogais($v){
    $v2 = strtolower($v);
    if($v2=="a" || $v2=="e" || $v2=="i" || $v2=="o"|| $v2=="u"){
        return "true";
    }else{
        return "O carácter NON é unha vogal";
    }

}
echo vogais("E");

echo" "."</br>";


// 5. Crea una función que reciba un número e devolva se o número é par ou impar.
function pares($num){
    $div= $num%2;
    if($div==0){
        return "O número é par";
    }else{
        return "O número é impar";
    }
}
echo pares(5);

echo" "."</br>";


// 6. Crea una función que reciba un string e devolva o string en maiúsculas.
function mayus($palabra2){
    return strtoupper($palabra2);
}
echo mayus("Blanca");

echo" "."</br>";

// 7. Crea una función que imprima a zona horaria (*timezone*) por defecto utilizada en PHP.
function timeZone() {
    return date_default_timezone_get();
}

echo timeZone();

echo" "."</br>";

/* 8. Crea una función que imprima a hora á que sae e se pon o sol para a 
localización por defecto. Debes comprobar como axustar as coordenadas (latitude e lonxitude)
 predeterminadas do teu servidor.
*/
?>