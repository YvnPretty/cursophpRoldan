<?php

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];


    var_dump($_GET);

    echo $nombre . $edad;
} else {
    echo "No se recibió ningún nombre.";
}
?>