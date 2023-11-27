<?php

global $connection;


/*Función para establecer la conexión con la BD (MySQL orientado a objetos) y 
control de posibles errores */
function get_connection(){
    global $connection;
    @$connection = new mysqli('db', 'root', 'test', 'dbname');
    $error = $connection->connect_errno;
    if($connection->connect_error){
        die("</br>Fallo en la conexión: ".$connection->connect_error." con número ".$error);
    }
    echo "</br>Conexión correcta.";
    
}

//Función para cerrar la conexión
function del_connection(){
    global $connection;
    if($connection){
        $connection->close();
    }
}



function crear_bd_tienda(){
    global $connection;
    $sql = "CREATE DATABASE IF NOT EXISTS tienda";
    if($connection->query($sql)){
        echo "</br>La base de datos 'tienda' ha sido creada.";
    }else{
        echo "</br>¡ERROR! La base de datos no ha podido crearse: ".$connection->error;
    }
}


function seleccionar_bd_tienda(){
    global $connection;
    if($connection->select_db('tienda')){
        echo "</br> Se ha seleccionado la base de datos 'tienda'.";
    }else{
        echo "</br>Error al seleccionar la base de datos: ".$connection->error;
    }
}


function crear_tabla_usuarios(){
    global $connection;
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        apellidos VARCHAR(100) NOT NULL,
        edad INT NOT NULL,
        provincia VARCHAR(50) NOT NULL)";

    if($connection->query($sql)){
        echo "</br>La tabla 'usuarios' ha sido creada.";
    }else{
        echo "</br>¡ERROR! La tabla 'usuarios' no ha podido crearse: ".$connection->error;
    }
}

function listarUsuarios(){
    global $connection;
    $sql = "SELECT * FROM usuarios";

    $resultado = $connection->query($sql);

    if ($resultado-> num_rows > 0) {
        while($row = $resultado->fetch_assoc()){
            echo"< tr >";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nombre"]."</td>";
            echo "<td>".$row["apellido"]."</td>";
            echo "<td>".$row["provincia"]."</td>";
            echo "<td> <a class='btn btn-primary' href=editar.php?id=".$row['id']."Editar</a> </td>";
            echo "<td> <a class='btn btn-primary' href=borrar.php?id=".$row['id']."Eliminar</a> </td>";
            echo " </tr> ";
        }
    }else{
        echo "No hay resultados";
    }
}

function eliminarUsuario($idUsuario){
    global $connection;

    $stmt = $connection->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->bind_param("i", $idUsuario);

    if ($stmt->execute()){
        return "<p>Usuario con id=".$id." eliminado.</p>";

    }else{
        return "</br>¡ERROR! No se ha podido eliminar al usuario. Error: ".$connection->error;
    }
    $stmt.close();
}

