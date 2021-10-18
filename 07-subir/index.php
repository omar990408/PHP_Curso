<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
<h1>Subir Imagenes con PHP</h1>
<!--Parte mas importante -> enctype ="multipart/form-data"-->
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo" id="">
    <input type="submit" value="Enviar">
</form>

<h2>Listado de imagenes</h2>
<?php
$gestor = opendir('./images');
if ($gestor):
    while(($imagen = readdir($gestor)) !== false):
        if($imagen != '.' && $imagen != '..'):
            echo "<img src='images/$imagen' width='500px' alt='Imagen'>".'<br>';
        endif;
    endwhile;
endif;
?>

</body>
</html>
