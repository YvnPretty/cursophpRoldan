<?php
// Recorrer Asociativos
$persona = [
    "nombre" => "Pretty",
    "web" => "google.com"
];

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor <br>";
}
?>