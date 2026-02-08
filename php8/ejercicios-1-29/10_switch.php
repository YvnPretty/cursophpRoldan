<?php

//switch es una extructura de control condicional
//es como un if pero para multiples condiciones

$diaNumero = 3;

switch ($diaNumero) {
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miercoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
    default:
        echo "dia no valido";
        break;
}



// 3. SWITCH (Para evaluar un mismo valor con varios casos)
$color = "rojo";

switch ($color) {
    case "azul":
        echo "El color es azul";
        break; // Importante el break para que no siga ejecutando
    case "rojo":
        echo "El color es rojo pasión";
        break;
    default:
        echo "No conozco ese color bro";
}
echo "<hr>";



?>