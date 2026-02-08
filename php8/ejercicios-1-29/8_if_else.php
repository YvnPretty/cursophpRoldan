<?php
// IF ELSE (Si no es chana, es juana)
$login = false;

if ($login) {
    echo "Bienvenido al sistema papu";
} else {
    echo "Largo de aqui, no estas registrado";
}
echo "<hr>";

// Operador Ternario (Es un if de una linea, nivel pro)
// condicion ? si_es_true : si_es_false;
$edad = 18;
echo ($edad >= 18) ? "Eres mayor de edad" : "Estas chavo";
?>