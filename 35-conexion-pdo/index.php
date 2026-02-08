<?php

$servidor = "127.0.0.1";
$usuario = "curso";
$password = "curso";
$bd = "curso";

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";

} catch (PDOException $e) {
    echo "Fallo la conexión: " . $e->getMessage();
}

/*
    Diferencia con mysqli:
    PDO permite conectar con múltiples bases de datos (MySQL, PostgreSQL, SQLite, etc.),
    mientras que mysqli solo conecta con MySQL.
*/

?>