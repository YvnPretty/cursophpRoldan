<?php
// Funciones para Arreglos
$nombres = ["Juan", "Pedro", "Ana"];

// sort, count, etc..
$cantidad = count($nombres);
echo "Hay $cantidad nombres";

$numeros = [1, 2, 3, 4, 5];
//contar numeros
$cantidad = count($numeros);
echo "Hay $cantidad numeros";
echo "<hr>";

//ordenar numeros
sort($numeros);
print_r($numeros);
echo "<hr>";
//agregar al final del arreglo
array_push($numeros, 6);
print_r($numeros);
echo "<hr>";
//agregar al inicio del arreglo
array_unshift($numeros, 0);
print_r($numeros);
echo "<hr>";
//eliminar el ultimo elemento
array_pop($numeros);
print_r($numeros);
echo "<hr>";
//eliminar el primer elemento
array_shift($numeros);
print_r($numeros);
echo "<hr>";
?>