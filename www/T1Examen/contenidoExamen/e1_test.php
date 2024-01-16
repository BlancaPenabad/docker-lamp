<?php
include("e1.php");

$arrayCualquiera = [2,7,45,24,9,11,6,10, "blanca"];

echo "Tenemos el array siguiente: </br>";
foreach ($arrayCualquiera as $aC){
    echo $aC. "   ";
}

echo "<br></br>";
echo "</br>¿Es par? </br>";
isPar($arrayCualquiera);

echo "<br></br>";
echo "¿Es impar? </br>";
isImpar($arrayCualquiera);

?>