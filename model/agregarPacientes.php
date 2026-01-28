<?php
include_once("conexion.php");
$conexion=conexion();


$sql = "INSERT INTO paciente(tipo_documento_id,numero_documento,nombre1,nombre2,apellido1,apellido2,genero_id,departamento_id,municipio_id,correo,foto)VALUES(1,7777777,'Prueba','','testing','',1,1,1,'prueba@gmail.com','')";
$stmt= $conexion->prepare($sql);
$stmt->execute();
echo "Registro insertado correctamente";
?>