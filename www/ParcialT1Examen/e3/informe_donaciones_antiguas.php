<?php

include "lib/base_datos.php";
include "lib/utilidades.php";

$conexion = get_conexion();
seleccionar_bd_donacion($conexion);

$mensajes = array();

if(isset($_POST['submit'])){
    if (!empty($_POST['fecha'])){
        $fechaElegida = test_input($_POST['fecha']);
    }else{
        $mensajes[] = array("error", "Introduce una fecha.");
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donación Sangre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <h1>Donaciones antiguas</h1>
    <?= get_mensajes_html_format($mensajes); ?>

    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Código Postal: <input type="date" name="fecha">
      <br>
      <input type="submit" name="submit" value="Submit"> 
    </form>
  </div>

  <table>
    <tr>
        <th>ID donante</th>
        <th>Fecha donación</th>
        <th>Fecha próxima donación</th>
    </tr>

    <?php
    if(isset($_POST['submit'])){
        $resultado_consulta = donaciones_antiguas($conexion, $fechaElegida);
        while($fila = $resultado_consulta->fetch()){
            echo "<tr>";
            echo "<td>" . $fila['idDonante'] . "</td>";
            echo "<td>" . $fila['fechaDonacion'] . "</td>";
            echo "<td>" . $fila['proximaDonacion'] . "</td>";
            echo "</tr>";
        }
    }
    ?>
  </table>
    
    <footer>
        <p><a href='index.php'>Página de inicio</a></p>
    </footer>

    <?php cerrar_conexion($conexion);?>

</body>

</html>
