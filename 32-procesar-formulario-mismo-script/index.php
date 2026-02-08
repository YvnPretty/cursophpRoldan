<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario en el mismo archivo</title>
</head>

<body>

    <h1>Subir archivos</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre:">
        <input type="text" name="materia" placeholder="Asignatura:">
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $materia = $_POST['materia'];

        if (empty($nombre)) {
            echo "El nombre es requerido";
        } else {
            echo "<br>Nombre: $nombre";
        }

        if (empty($materia)) {
            echo "<br>La asignatura es requerida";
        } else {
            echo "<br>Asignatura: $materia";
        }
    }
    ?>

</body>

</html>