<?php

include_once("conexion.php");

$conexion=conexion();

$sql="DELETE FROM paciente WHERE id=7";
$stmt=$conexion->prepare($sql);
$stmt->execute();

echo"Paciente eliminado con exito";

?>