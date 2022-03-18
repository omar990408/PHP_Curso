<?php

class UsuarioController{

    public function getAll(){
        require_once 'models/usuario.php';

        $usuario = new Usuario();
        $todosUsuarios = $usuario->getAll('usuarios');
        require_once 'views/usuarios/mostrar-todos.php';

    }
    public function create(){

        require_once 'views/usuarios/crear.php';

    }
}