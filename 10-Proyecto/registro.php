<?php

if (isset($_POST)) {
    require_once "includes/conexion.php";
    session_start();
    //var_dump($_POST);
    //  RECOGER VALORES DEL FORM
    $nombre = $_POST['nombre'] ?? false; // isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = $_POST['apellidos'] ?? false;
    $email = $_POST['email'] ?? false;
    $password = $_POST['password'] ?? false;

    // ARREGLO DE ERRORES
    $errores = array();

    //VALIDAR DATOS ANTES DE GUARDAR EN LA BDD
    //Validar Nombre
    if (!empty($nombre) and !is_numeric($nombre) and !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //Validar Apellidos
    if (!empty($apellidos) and !is_numeric($apellidos) and !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son valido";
    }
    //Validar email
    if (!empty($email) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }
    //Validar Contraseña
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "Contraseña vacia";
    }

    $guardar_usuario = false;
    if (sizeof($errores) == 0) {
        $guardar_usuario = true;
        //Cifrar Contraseña
        $password_segura = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]); // ultimo parametro cifra 4 veces
        //var_dump(password_verify($password,$password_segura)); // Compara contraseñas
        //Insertar usuario en la BDD en su tabla correspondiente
        $sql = "INSERT INTO usuarios VALUES (null,'$nombre','$apellidos','$email','$password_segura',CURRENT_DATE ())";
        $guardar = mysqli_query($db,$sql);
        if($guardar){
            $_SESSION['completado'] = 'El registro se ha completado con exito';
        }else{
            $_SESSION['errores']['general']='Fallo al guardar el usuario!';
        }
    } else {
        $_SESSION['errores'] = $errores;
    }

}
header('Location: index.php');