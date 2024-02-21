<?php
include("Usuario.php");

$U1 = new Usuario("1", "Blanca", "Penabad Villar");
$U2 = new Usuario(2, "Fátima", "Sánchez Blanco");

$U1->accion();
$U2->accion();

?>