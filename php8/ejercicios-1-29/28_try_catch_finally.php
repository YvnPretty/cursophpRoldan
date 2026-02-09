<?php
// Excepciones (Try Catch) es una extructura de control de errores
//peromiete ejecutar codigo que puede fallar no es abrupto., finally optional  
try {
    throw new Exception("Error provocado");
} catch (Exception $e) {
    echo "Capturado: " . $e->getMessage();
}


try {
    $a = 10;
    $b = 0;

    if ($b === 0) {
        throw new Exception("No se puede dividir entre cero");
    }

    $resultado = $a / $b;
    echo "Resultado: " . $resultado;

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();

} finally {
    echo "<br>Proceso finalizado.";
}





?>