<?php 

require "lib/funciones.php";
require "lib/utilidades.php";
require "lib/base_datos.php";
get_connection();
seleccionar_bd_tienda();



    $target_dir = "uploads/"; //carpeta donde guardaré el archivo.
    $target_file = $target_dir.basename($_FILES["fichero"]["name"]); //Ruta del archivo.
    $extensionFichero = pathinfo($target_file, PATHINFO_EXTENSION); //Extensión del archivo
    $tamanhoFichero = $_FILES["fichero"]["size"];

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
        if( empty($_POST["nombre"]) || empty($_POST["descripcion"]) || empty($_POST["precio"]) || empty($_POST["unidades"]) || empty($_FILES["fichero"]["name"]) ){
            echo "Todos los campos del formulario son obligatorios.";
        }else{
            
            $nombre = test_input($_POST["nombre"]);
            $descripcion = test_input($_POST["descripcion"]);
            $precio = test_input($_POST["precio"]);
            $unidades = test_input($_POST["unidades"]);
            $foto = $_FILES["fichero"];
 

            if(!file_exists($target_file)){

                if(compruebaTamanho($tamanhoFichero)){
        
                    if($extensionFichero = 'txt'){
                        $target_dir = 'uploads/';
                        $target_file = $target_dir.basename($_FILES["fichero"]["name"]);
                        move_uploaded_file($_FILES["fichero"]["tmp_name"], $target_file);
                        altaProductos($nombre,$descripcion, $precio, $unidades, $target_file);
                        echo "Archivo de texto dado de alta.";

                    }else if ($extensionFichero = 'pdf') {
                        $target_dir = 'uploads/pdf/';
                        $target_file = $target_dir.basename($_FILES["fichero"]["name"]);
                        move_uploaded_file($_FILES["fichero"]["tmp_name"], $target_file);
                        altaProductos($nombre,$descripcion, $precio, $unidades, $target_file);
                        echo "PDF dado de alta.";

                    }else if($extensionFichero = 'jpg' || $extensionFichero = 'jpeg' || $extensionFichero = 'png') {
                        $target_dir = 'uploads/imagen/';
                        $target_file = $target_dir.basename($_FILES["fichero"]["name"]);
                        move_uploaded_file($_FILES["fichero"]["tmp_name"], $target_file);
                        altaProductos($nombre,$descripcion, $precio, $unidades, $target_file);
                        echo "Imagen dada de alta.";

                    }else{
                        $target_dir = 'uploads/otros/';
                        $target_file = $target_dir.basename($_FILES["fichero"]["name"]);
                        move_uploaded_file($_FILES["fichero"]["tmp_name"], $target_file);
                        altaProductos($nombre,$descripcion, $precio, $unidades, $target_file);
                    }
        
                }else{
                    echo "El fichero es demasiado grande.";
                }
        
            }else{
                echo "El fichero ya existe.";
            }
        }
    }


   


    del_connection();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Alta producto </h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    
    <!-- El "action" llama a dar_alta_producto.php de modo reflexivo-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

    Nombre: <input type="text" id="nombre" name ="nombre"> </br>
    Descripción: </br><textarea id="descripcion" name ="descripcion" rows="5" cols="50"> </textarea> </br>
    Precio: <input type="number" id="precio" name = "precio" step="0.01"> </br>
    Unidades: <input type="number" id="unidades" name ="unidades"> </br>
    Imagen: <input type="file" name="fichero" id="fichero"></br>
    <input type="submit" name="submit" value="Registrar">

    
    </form>
    
    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>
</html>