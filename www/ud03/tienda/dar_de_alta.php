<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tienda IES San Clemente </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1>Alta de usuario </h1>
    <?php
        //Comprobar se veñen datos polo $_POST
        //Conexión
        //Seleccionar bd
        //Executar o INSERT
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <p>Formulario de alta</p>
    <!-- o "action" chama a dar_de_alta.php de xeito reflexivo-->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Nombre: <input type="text" name "nombre"> </br>
    Apellidos: <input type="text" name "apellidos"> </br>
    Edad: <input type="number" name "edad"> </br>
    Provincia: </br>
    <select name="provincias">
        <option value="ACoruna">A Coruña</option>
        <option value="Lugo">Lugo</option>
        <option value="Ourense">Ourense</option>
        <option value="Pontevedra">Pontevedra</option>
        </select></br>
        <input type="submit" name="submit" value="Registrar">
    
    </form>

    <footer>
        <p>
            <a href='index.php'>Página de inicio</a>
        </p>
    </footer>
</body>

</html>
<?php del_connection(); ?>