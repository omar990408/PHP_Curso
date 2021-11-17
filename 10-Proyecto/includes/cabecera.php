<?php require_once "conexion.php"; ?>
<?php require_once "helpers.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog | Video Juegos </title>
</head>

<body>
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!--MENU-->

        <nav id="menu">
            <ul>
                <li>
                    <a href=index.php>Inicio</a>
                </li>
                <?php $categorias = conseguirCategorias($db); ?>
                <?php while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
                    <li>
                        <a href="categoria.php?id=<?= $categoria['id'] ?>"> <?= $categoria['nombre'] ?> </a>
                    </li>

                <?php endwhile; ?>
                <li>
                    <a href=index.php>Sobre mi</a>
                </li>
                <li>
                    <a href=index.php>Contacto</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>
    <div id="contenedor">