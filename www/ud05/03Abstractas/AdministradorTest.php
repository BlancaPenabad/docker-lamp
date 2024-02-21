<?php
include("Administrador.php");

$A1 = new Administrador(3, "Iria", "Pérez García");
$A2 = new Administrador(4, "Raquel", "Molinero Corrales");

$A1->accion();
$A2->accion();

?>