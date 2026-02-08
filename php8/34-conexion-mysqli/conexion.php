<?php

$servidor = "127.0.0.1";
$usuario = "curso";
$password = "curso";
$bd = "curso";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BBDD";
    exit();
}

echo "Conexión exitosa";

?>