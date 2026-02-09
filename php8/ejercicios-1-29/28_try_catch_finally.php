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
if($b=== 0){
}throw new Exception("no se puede divir entre cero");
}





?>