<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP y HTML</title>
</head>

<body>
    <h1>Formulario XD</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- enctype="multipart/form-data" -> perimite enviar archivos desde el formulario hasta el servidor  -->
        <label for="Apellido">Nombre:</label>
        <p> <input type="text" name="nombre" id=""> </p>
        <label for="Apellido">Apellido:</label>
        <p> <input type="text" name="apellido" id="" pattern="[A-Z ]+" ></p>
            <input type="submit" value="Enviar">

        <!-- atributos 
        autofocus -> focus in this box
        disabled -> se desabilita
        maxlength="X" -> maximo de caracteres 
        minlength="X" -> minimo de caracteres
        pattern="[A-Z]+" -> permite letras mayusculas con espacios un numero indefinido de veces
        required -> se necesita ese camppo
        placeholder = "sasas"
        value = "xx" trae de por si texto
        -->
    </form>

</body>

</html>