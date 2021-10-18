<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario en PHP</h1>
    <form action="recibir.php" method="GET">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>