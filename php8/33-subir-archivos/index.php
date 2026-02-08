<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos al servidor</title>
</head>

<body>

    <h1>Subir archivos al servidor con PHP</h1>

    <form action="subir.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>