<?php
require_once "models/Producto.php";
class ProductoController{
    public function index(){
       // RENDERIZAR VISTA
        require_once "views/producto/destacados.php";
    }

    public function gestion(){
        Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once "views/producto/gestion.php";
    }

    public function crear(){
        Utils::isAdmin();
        require_once "views/producto/crear.php";
    }
    public function save(){
        Utils::isAdmin();
    if (isset($_POST)){
        $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
        $descripcion = $_POST['descripcion'] ?? false;
        $precio = $_POST['precio'] ?? false;
        $stock= $_POST['stock'] ?? false;
        $categoria= $_POST['categoria'] ?? false;
        //$imagen= $_POST['imagen'] ?? false;

        if ($nombre and $descripcion and $precio and $stock and $categoria ){
            $producto = new Producto();
            $producto->setNombre($nombre);
            $producto->setDescripcion($descripcion);
            $producto->setPrecio($precio);
            $producto->setStock($stock);
            $producto->setCategoriaId($categoria);
            $save = $producto->save();
            if($save){
                $_SESSION['producto'] = 'complete';
            }else{
                $_SESSION['producto'] = 'failed';
            }
        }else{
            $_SESSION['producto'] = 'failed';
        }

    }else{
        $_SESSION['producto'] = 'failed';
    }
    header("Location:".base_url.'Producto/gestion');
    }
}