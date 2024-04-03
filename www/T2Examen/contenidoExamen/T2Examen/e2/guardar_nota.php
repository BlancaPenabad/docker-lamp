<?php

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre y el contenido de la nota desde el formulario
    $nombre = $_POST['nombre'] ?? '';
    $contenido = $_POST['contenido'] ?? '';

    //Guardar la nota en un archivo

    $nombreFichero = $nombre.".txt";
    $path = "notas/".$nombreFichero;
    $miFichero = fopen($path, "w") or die ("Imposible abrir el fichero.");
    echo "La nota se ha guardado correctamente en el archivo: $nombre.txt";
    fwrite($miFichero, $contenido);
    fclose($miFichero);
} else {
    // Si no se han enviado los datos del formulario, redirigir al formulario
    header('Location: formulario.html');
    exit();
}
