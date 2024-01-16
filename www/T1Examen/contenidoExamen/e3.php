<?php

$coches = [

    ["Marca"=>"Volvo","Stock"=>22, "Ventas"=>18],
    ["Marca"=>"BMW", "Stock"=>15, "Ventas"=>13],
    ["Marca"=>"Saab", "Stock"=>5, "Ventas"=>2],
    ["Marca"=>"Land Rover", "Stock"=>17, "Ventas"=>15],
    ["Marca"=>"Mercedes Benz", "Stock"=>18, "Ventas"=>11]
];
/*
function imprimirTabla($miArray){
    foreach ($miArray as $a){
       $nombre = (int)"strlen({$miArray[$a]["Marca"]})";
      $ventas = "{$miArray[$a]["Ventas"]}";
      if($nombre>4 && $ventas>10){
        echo"<table>";
        foreach ($miArray as $lin){
            echo"<tr>";
            foreach($lin as $col){
                echo"<td>$col</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
      }
    }
}
*/
/*
for($i=0; $i<5; $i++){
    echo "{$coches[$i]["Marca"]}";

}
*/
function crearTabla($arr){
    echo"<table>";
    foreach ($arr as $lin){
        echo"<tr>";
        foreach($lin as $col){
            echo"<td>$col</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}



crearTabla($coches);
?>