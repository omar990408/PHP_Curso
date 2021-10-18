<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validación de Formularios</title>
</head>
<body>
    <h1>Validar Formularios en PHP</h1>
    <?php
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        if ($error == 'faltan valores'){
            echo '<b style="color: red"> Introduce todos los datos en los campos del formulario </b>';
        }
        if ($error == 'Nombre'){
            echo '<b style="color: red"> Introduce bien el Nombre </b>';
        }
        if ($error == 'apellido'){
            echo '<b style="color: red"> Introduce el apellido </b>';
        }
        if ($error == 'edad'){
            echo '<b style="color: red"> bien la edad </b>';
        }
        if ($error == 'email'){
            echo '<b style="color: red"> introduce bien el mail</b>';
        }
        if ($error == 'Password'){
            echo '<b style="color: red"> introduce una mejor contraseña</b>';
        }
    }
    ?>
    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required pattern="[A-Za-z ]+" ><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required pattern="[A-Za-z ]+" ><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required pattern="[0-9]+"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br><br>

        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" required><br><br>

        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>