<?php

include_once("conexion.php");

$conexion=conexion();

$sql="SELECT id,numero_documento,nombre1,nombre2,apellido1,apellido2,correo,foto FROM paciente";
$stmt= $conexion->prepare($sql);
$stmt->execute();
$pacientes=$stmt->fetchALL(PDO::FETCH_ASSOC);

?>