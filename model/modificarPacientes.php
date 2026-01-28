<?php
include_once("conexion.php");

$conexion=conexion();

$sql="UPDATE paciente SET nombre1='Juan 3',nombre2='Carlos',apellido1='Gutierrez',apellido2='Alvarado',correo='juancarlos@gmail.com' WHERE id=6";
$stmt=$conexion->prepare($sql);
$stmt->execute();
echo "Registro actualizado correctamente";

?>