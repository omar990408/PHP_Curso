<?php
require_once "models/Usuario.php";
class UsuarioController{
    public function index(){
        echo 'Controlador - Usuarios, Accion -> index';
    }

    public function registro(){
        require_once "views/usuario/registro.php";
    }

    public function save(){
        if(isset($_POST)){
            $nombre = $_POST['nombre'] ?? false;
            $apellido = $_POST['apellido'] ?? false;
            $email = $_POST['email'] ?? false;
            $password = $_POST['password'] ?? false;

            if($nombre and $apellido and $email and $password){
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario -> setApellidos($apellido);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();
                if($save){
                    $_SESSION['register'] = "complete";
                }else{
                    $_SESSION['register'] = "failed";
                }
            }else{
                $_SESSION['register'] = "failed";
            }


        }else{
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url.'Usuario/registro');
    }

}