<h1>Welcome to myWeb with MVC</h1>
<?php
// ?action=listar&controller=Notas
//require_once "controllers/usuario.php";
//require_once "controllers/nota.php";
require_once "autoload.php";

if (isset($_GET['controller']) and class_exists($_GET['controller']).'Controller'){
    $nameController = $_GET['controller'].'Controller';
    $controlador = new $nameController();

    if(isset($_GET['action']) and method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador -> $action();
//    $controlador -> getAll();
//    $controlador -> create();
    }else{
        echo "<h3>Error 404...</h3>";
    }

}else{
    echo "<h3>Error 404...</h3>";
}


