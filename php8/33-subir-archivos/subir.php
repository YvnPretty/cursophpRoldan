<?php

$fichero = $_FILES['fichero'];

// var_dump($fichero);

// $fichero['name']
// $fichero['tmp_name']

$nombre = $fichero['name'];
$temporal = $fichero['tmp_name'];

if (move_uploaded_file($temporal, 'subidos/' . $nombre)) {
    echo "<h1>Archivo subido con éxito</h1>";
} else {
    echo "<h1>No se pudo subir el archivo</h1>";
}

echo "<br><br> <a href='index.php'>Regresar</a>";

?>