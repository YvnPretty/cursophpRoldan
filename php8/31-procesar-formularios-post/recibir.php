<?php
// print_r($_POST);

/*
    DIFERENCIA GET vs POST:
    - GET: Manda los datos en la URL (visible). Tienen límite de caracteres.
    - POST: Manda los datos ocultos en el cuerpo de la petición (payload). No tiene límite estricto de tamaño.

    ¡OJO! POST no cifra los datos, solo los oculta de la URL. Para cifrar se necesita HTTPS.
*/

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $materia = $_POST['materia'];

    var_dump($_POST);

    echo " Felicidades por estudiar!!";

} else {
    echo "No se recibieron datos por POST.";
}
?>