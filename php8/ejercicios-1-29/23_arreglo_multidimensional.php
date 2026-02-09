<?php
// Arreglos Multidimensionales es un arreglo que contiene otros arreglos como datos
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matriz[1][1]; // 5
echo $estudiantes[0][0]; //pretty
echo " <br>";
echo $estudiantes[1][0];
echo $estudiantes[2][0];
echo $estudiantes[3][0];
echo $estudiantes[4][0];

$estudiantes = [
    1 => [
        "nombre" => "Martín Garrix",
        "profesion" => "Veterinaria"
    ],
    2 => [
        "nombre" => "Amanda",
        "profesion" => "Veterinaria"
    ]
];

echo "Estudiante número 1<br>";
echo "Nombre: " . $estudiantes[1]["nombre"] . "<br>";
echo "Profesión: " . $estudiantes[1]["profesion"] . "<br><br>";

echo "Estudiante número 2<br>";
echo "Nombre: " . $estudiantes[2]["nombre"] . "<br>";
echo "Profesión: " . $estudiantes[2]["profesion"] . "<br>";

?>