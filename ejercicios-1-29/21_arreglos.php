<?php

//sintaxis vieja de arreglo
$frutas = array("banana", "manzana", "pera");

echo "<pre>";
var_dump($frutas);
echo "</pre>";
echo "<hr>";

//sintaxis corta de array
$colores = ["rojo", "negro", "blanco"];
echo "<pre>";
var_dump($colores);
echo "</pre>";
echo "<hr>";

//agregar un elemento al final del arreglo
$colores[] = "gris";

//acceder a un indice especifico
echo $colores[1];

var_dump($colores);
?>