<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/crearPacientes.css">
    <title>Crear Pacientes</title>
</head>

<body>
    <div class="container">
        <h1>Ingresa los datos del paciente</h1>
        <form class="form-styles" action="../controller/agregarPacientesControllers.php" method="post">
            <label for="documento">Tipo de Documento</label>
            <select name="documento" id="" required>
                <option value="1">Cedula de Ciudadania</option>
                <option value="2">Tarjeta de Identidad</option>
            </select>

            <label for="numero-documento">Numero de Documento</label>
            <input type="number" name="numero-documento" required>

            <label for="nombre1">Primer Nombre</label>
            <input type="text" name="name1" required>

            <label for="nombre2">Segundo Nombre</label>
            <input type="text" name="name2">

            <label for="apellido1">Primer Apellido</label>
            <input type="text" name="apellido1" required>

            <label for="apellido2">Segundo Apellido</label>
            <input type="text" name="apellido2">

            <label for="genero">Genero</label>
            <select name="genero" id="" required>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>

            <label for="departamento">Departamento</label>
            <select name="departamento" id="selectDepartamentos" required>
            </select>

            <label for="municipio">Municipio</label>
            <select name="municipio" id="selectMunicipios" required></select>

            <label for="correo">Correo Electronico</label>
            <input type="email" name="correo" required>

            <label for="foto">Correo Electronico</label>
            <input type="file" name="file">
        </form>
    </div>

    <script src="js/crearPacientes.js"></script>
</body>

</html>