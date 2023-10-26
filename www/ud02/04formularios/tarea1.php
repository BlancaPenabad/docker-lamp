<html>
    <head>
        <meta charset="utf-8">
        <title>HTML</title> 
    </head>
    <body>
        <div>
            <!-- Aquí va el formulario-->
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> 
            Nombre: <input type="text" name="nombre">
            <br><br>
            Apellidos: <input type="text" name="apellidos">
            <br><br>
            <input type="submit" name="submit" value="Submit">  
            </form>
        </div>

            <div>
                <?php 
                    /**  Cree un formulario que solicite su nombre y apellido. Cuando se reciben los datos, se debe mostrar la siguiente información:
                     * Nombre: `xxxxxxxxx`
                     *  Apellidos: `xxxxxxxxx`
                     * Nombre y apellidos: `xxxxxxxxxxxx xxxxxxxxxxxx`
                     * Su nombre tiene caracteres `X`.
                     * Los 3 primeros caracteres de tu nombre son: `xxx`
                     * La letra A fue encontrada en sus apellidos en la posición: `X`
                     * Tu nombre en mayúsculas es: `XXXXXXXXX`
                     * Sus apellidos en minúsculas son: `xxxxxx`
                     * Su nombre y apellido en mayúsculas: `XXXXXX XXXXXXXXXX`
                     * Tu nombre escrito al revés es: `xxxxxx`
                    */
                    
                    //Aquí el código php que muestra la información solicitada.
                    $name = $_POST["nombre"];
                    $surname = $_POST["apellidos"];
                    echo "Nombre: ".$name."</br>";
                    echo "Apellidos: ".$surname."</br>";
                    echo "Nombre y apellidos: ".$_POST["nombre"]." ".$_POST["apellidos"]."</br>";
                    echo "Su nombre tiene ".strlen($name)." caracteres</br>";
                    echo "Los 3 primeros caracteres de su nombre son: ".substr($name,0,3)."</br>";
                    echo "La letra A fue encontrada en sus apellidos en la posición: ".strpos($surname,"a",0)."</br>";
                    echo "Su nombre en mayúsculas es: ".strtoupper($name)."</br>";
                    echo "Sus apellidos en minúsculas son: ".strtolower($surname)."</br>";
                    echo "Su nombre y apellido en mayúsculas:".strtoupper($name)." ".strtoupper($surname)."</br>";
                    echo "Su nombre escrito al revés es: ".strrev($name)."</br>";
                ?>
        </div>
    </body>
</html>
