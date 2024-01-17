<?php
//EJERCICIO 1:

session_start();

if(!isset($_COOKIE['contador'])){  ////Primero nos cercioriamos de que no existe la cookie "contador".  
    setcookie('contador', 1, time()+86400); //De no existir, la creamos y la inicializamos a 1. De duración le doy 1 día. 
    echo "¡Bienvenid@ por primera vez a nuestra tienda!"; //Mostramos un mensaje de bienvenida por ser la 1ª vez.
}else{
    setcookie('contador', $_COOKIE['contador']+1, time()+86400*30); //Si la cookie existe, incrementamos su valor en 1 y actualizamos.
    echo "Contador visitas: ".$_COOKIE['contador']; //Mostramos un mensaje con el nº de visitas almacenado en la cookie.
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
        include("lib/base_datos.php");
        get_connection();
        crear_bd_tienda();
        seleccionar_bd_tienda();
        crear_tabla_usuarios();

    ?>
    <h1>Tienda IES San Clemente</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <p>
        <a class="btn btn-primary" href="dar_de_alta.php" role="button"> Alta usuarios</a>
        <a class="btn btn-primary" href="listar.php" role="button"> Listar usuarios</a>
        
    </p>
    
    <footer>
    <p>
            <a href="idiomas.php" role="button"> Idioma</a>
        </p>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>

</html>
<?php del_connection();?>