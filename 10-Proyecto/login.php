<?php
//Iniciar la sesión y la conexión a bd
require_once "includes/conexion.php";

// Recoger los datos del formulario
if (isset($_POST)) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    if ($login and mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        // Comprobar la contraseña / cifrar

        $verify = password_verify($password, $usuario['password']);
        if ($verify) {
            //Utilizar un sesion para guardar los datos del usario logeado
            $_SESSION['usuario'] = $usuario;
            if (isset( $_SESSION['error_login'])){
                unset( $_SESSION['error_login']);
            }

        } else {
            // si algo falla, enviar una sesion con el
            $_SESSION['error_login'] = 'Login incorrecto!!';
        }

    } else {
        $_SESSION['error_login'] = 'Login incorrecto!!';
    }

}

// Redirigir al index_maqueta.php
header('Location: index.php');