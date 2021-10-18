<?php
$error = 'faltan valores';
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
        !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass']) ){
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //Validando nombre
    if(!is_string($nombre) || preg_match("/[0-9]+/",$nombre)){
        $error = 'Nombre';
    }
    if(!is_string($apellidos) || preg_match("/[0-9]+/",$apellidos)){
        $error = 'apellido';
    }
    if(!is_numeric($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
        $error = 'edad';
    }

    if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    if(empty($pass) || strlen($pass)<5){
        $error = 'Password';
    }

//    var_dump($_POST);
//    var_dump($error);
//    die();
}else{
    $error = 'faltan valores';
}
if($error != 'ok'){
    header("Location:index.php?error=$error");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Procesado</title>
</head>
<body>
    <h1>Datos</h1>
    <?php if($error = 'ok'):?>
        <h1>Datos validados Correctamente</h1>
    <p><?=$nombre ?></p>
    <p><?=$apellidos ?></p>
    <p><?=$edad ?></p>
    <p><?=$email ?></p>
    <?php endif; ?>

</body>
</html>
