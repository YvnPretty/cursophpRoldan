<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>

<body>
    <form action="recibir.php" method="post">
        <label for="nombre">Escribe tu nombre:</label>
        <br>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="materia">Escribe tu materia:</label>
        <br>
        <input type="text" name="materia" id="materia" required>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>