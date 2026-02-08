<?php
$servidor = "127.0.0.1";
$usuario = "curso";
$password = "curso";

// Conexión sin BD para crearla
$conexion = new mysqli($servidor, $usuario, $password);

if ($conexion->connect_error) {
    die("Fallo la conexión inicial: " . $conexion->connect_error);
}

// Crear BD
$sql = "CREATE DATABASE IF NOT EXISTS curso";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente<br>";
} else {
    echo "Error creando base de datos: " . $conexion->error . "<br>";
}

// Seleccionar BD
$conexion->select_db("curso");

// Crear tabla
$sql = "CREATE TABLE IF NOT EXISTS t_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

if ($conexion->query($sql) === TRUE) {
    echo "Tabla t_usuarios creada exitosamente<br>";
} else {
    echo "Error creando tabla: " . $conexion->error . "<br>";
}

$conexion->close();
?>