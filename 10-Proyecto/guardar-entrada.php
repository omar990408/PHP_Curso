<?php
if(isset($_POST)) {
    require_once "includes/conexion.php";

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']):false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria']:false;
    $usuario = $_SESSION['usuario']['id'];
    // ARREGLO DE ERRORES
    $errores = array();

    //VALIDAR DATOS ANTES DE GUARDAR EN LA BDD
    //Validar Nombre

    if(empty($titulo)){
        $errores['titulo'] = "El titulo no es valido";
    }
    if(empty($descripcion)){
        $errores['descripcion'] = "La descripcion no es valido";
    }

    if (empty($categoria) and !is_numeric($categoria)){
        $errores['categoria'] = "La categoria no es valido";
    }


    if (count($errores) == 0){
        $sql = "INSERT INTO entradas values (null , $usuario,$categoria,'$titulo','$descripcion',CURRENT_DATE);";
        $guardar = mysqli_query($db,$sql);
    }else{
        $_SESSION['errores_entrada'] = $errores;
    }

}
header('Location: index.php');
