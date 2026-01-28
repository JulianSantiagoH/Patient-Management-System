<?php
include_once("model/conexion.php");
echo "CONEXION OK";

$con = conexion();
$sql="SELECT * FROM departamentos";
$stmt = $con->prepare($sql);
$stmt->execute();
$departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($departamentos as $d) {
    echo "Departamento: " . $d['nombre'] . "<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>