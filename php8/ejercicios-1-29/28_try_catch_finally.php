<?php
// Excepciones (Try Catch)
try {
    throw new Exception("Error provocado");
} catch (Exception $e) {
    echo "Capturado: " . $e->getMessage();
}
?>