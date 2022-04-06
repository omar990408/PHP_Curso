
<?php
require_once "autoload.php";
require_once "views/layout/header.php";
require_once "views/layout/sidebar.php";


if(isset($_GET['controller'])){
    $nameController = $_GET['controller'].'Controller';
}else{
    echo "La página no existe";
    exit();
}

if (class_exists($nameController)){
    $controlador = new $nameController();
    if(isset($_GET['action']) and method_exists($controlador,$_GET['action'])){
        $action = $_GET['action'];
        $controlador -> $action();
    }else{
        echo "La página que buscas no existe";
    }

}else{
    echo "La página que buscas no existe";
}
require_once "views/layout/footer.php";

