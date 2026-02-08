<?php
// FUNCIONES DE FLECHA (Arrow Functions)
// Disponibles desde PHP 7.4
// Son más concisas para funciones simples de una sola linea que retornan valor.
// Tienen acceso automático a las variables del ámbito padre (scope).

$cajero = 10;

// Sintaxis: fn(argumentos) => expresión a retornar

$agregar_cajero = fn($dinero) => $dinero + $cajero;

echo $agregar_cajero(20); // 30
echo "<br>";

// Ejemplo con arrray_map (muy útil)
$numeros = [1, 2, 3, 4, 5];

// Queremos elevarlos al cuadrado
$cuadrados = array_map(fn($n) => $n * $n, $numeros);

print_r($cuadrados);
?>