<?php

require_once("../model/conexion.php");
require("../model/pacientes.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
</head>

<body>
    <h1>Lista de pacientes</h1>
        <div>
            <a href="./crearPacientes.php"><button>Agregar Paciente</button></a>
            <a><button>Modificar Paciente</button></a>
            <a><button>Eliminar Paciente</button></a>
        </div>
    
        <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Numero Documento</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Foto</th>
            </tr>

            <?php foreach ($pacientes as $p) { ?>
                <tr>
                    <td><?= $p["id"] ?></td>
                    <td><?= $p["numero_documento"] ?></td>
                    <td><?= $p["nombre1"] . ' ' . $p["nombre2"] ?></td>
                    <td><?= $p["apellido1"] . ' ' . $p["apellido2"] ?></td>
                    <td><?= $p["correo"] ?></td>
                    <td><?= $p["foto"] ?></td>
                </tr>
            <?php } ?>
        </table>

</body>

</html>