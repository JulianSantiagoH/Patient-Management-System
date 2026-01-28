<?php

function conexion() {
    $host = "localhost";
    $db   = "nombre_bd";
    $user = "usuario";
    $pass = "password";

    try {
        $con = new PDO(
            "mysql:host=$host;dbname=$db;charset=utf8",
            $user,
            $pass
        );
        return $con;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}
