<?php

if (isset($_POST)) {
    require_once "includes/conexion.php";


    //var_dump($_POST);
    //  RECOGER VALORES DEL FORM DE ACTULIZAR USUARIO
    $nombre = isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']):false;     // isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos'])? mysqli_real_escape_string($db,$_POST['apellidos']):false;
    $email = isset($_POST['email'])? mysqli_real_escape_string($db,trim($_POST['email'])):false;


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

    $guardar_usuario = false;
    if (sizeof($errores) == 0) {
        $usuario = $_SESSION['usuario'];
        $guardar_usuario = true;

        //COMPROBAR SI MAIL EXISTE
        $sql = "SELECT id,email FROM usuarios where email='$email'";
        $isset_email = mysqli_query($db,$sql);
        $isset_user = mysqli_fetch_assoc($isset_email);

        if($isset_user['id'] == $usuario['id'] || empty($isset_user) ){
            //Actualizar usuario en la BDD en su tabla correspondiente
            $usuario = $_SESSION['usuario'];
            $sql = "UPDATE usuarios SET nombre = '$nombre',apellidos = '$apellidos',email='$email' where id = {$usuario['id']}";
            $guardar = mysqli_query($db, $sql);
            //var_dump(mysqli_error($db));

            if ($guardar) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] =$apellidos;
                $_SESSION['usuario']['email'] =$email;
                $_SESSION['completado'] = 'Tus datos se han actualizado con exito';
            } else {
                $_SESSION['errores']['general'] = 'Fallo al actualizar usuario!';
            }
        }else{
            $_SESSION['errores']['general'] = 'El usuario ya existe';
        }

    } else {
        $_SESSION['errores'] = $errores;
    }

}
header('Location: mis-datos.php');