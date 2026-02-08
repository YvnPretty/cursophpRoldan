<?php
// DO WHILE
// La diferencia es que este ejecuta el código AL MENOS UNA VEZ
// y luego pregunta si sigue.

$respuesta = "s";

do {
    echo "Hola pvtoxd, ¿Continuar? (s/n) <br>";
    // Aquí simulamos que la condición cambia o se mantiene
    // En un script de consola usaríamos trim(fgets(STDIN))
    // Para web, simplemente mostramos el concepto o forzamos la salida para no hacer loop infinito
    $respuesta = "n";
} while ($respuesta == "s");

echo "Fin del do-while";
?>