
<?php

session_start();
require_once "autoload.php";
require_once "config/db.php";
require_once "config/parameters.php";
require_once "helpers/Utils.php";
require_once "views/layout/header.php";
require_once "views/layout/sidebar.php";



function show_error(){
    $error = new ErrorController();
    $error->index();
}

if(isset($_GET['controller'])){
    $nameController = $_GET['controller'].'Controller';
}elseif (!isset($_GET['controller']) and !isset($_GET['action'])){
    $nameController = controller_default;
}else{
    show_error();
    exit();
}

if (class_exists($nameController)){
    $controlador = new $nameController();
    if(isset($_GET['action']) and method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador -> $action();
    }elseif (!isset($_GET['controller']) and !isset($_GET['action'])){
        $default = action_default;
        $controlador -> $default();
    }else{
        show_error();
    }

}else{
    show_error();
}
require_once "views/layout/footer.php";

