<?php 
//Iniciar sesión
session_start();

include('lib/utilidades.php');


$mensaje = '';

$cookie_name ="idiomas";

if(!isset($_POST["idioma"])){
    echo " ";
}else{
    $idiomaSeleccionado = $_POST["idioma"];

    setcookie($cookie_name, $idiomaSeleccionado, time() + (86400 * 30));

    if(!isset($_COOKIE[$cookie_name])){
        echo " ";
    }else{
        $mensaje = mensajeIdioma($idiomaSeleccionado);
    }
}

//$mensaje = mensajeIdioma($idiomaSeleccionado);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección idioma</title>
</head>
<body>
    <form action="" method="post">
<h2>  Selecciona tu idioma: </h2>
    <select name="idioma" id="idioma">
        <option value="ES">Español</option>
        <option value="GAL">Gallego</option>
        <option value="ENG">Inglés</option>
        <option value="FR">Francés</option>
        <option value="RUS">Ruso</option>
        </select></br>
        <input type="submit" name="submit" value="Aceptar">
    </form>

    <p><?php echo $mensaje; ?></p>
    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>
</html>