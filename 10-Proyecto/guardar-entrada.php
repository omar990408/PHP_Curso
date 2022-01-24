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
        if ($_GET['editar']){
            $entrada_id = $_GET['editar'];
            $usuario_id = $_SESSION['usuario']['id'];
            $sql = "UPDATE entradas SET titulo='$titulo',descripcion='$descripcion',categoria_id = $categoria ".
                        " WHERE id = $entrada_id AND usuario_id=$usuario_id" ;
        }else{
            $sql = "INSERT INTO entradas values (null , $usuario,$categoria,'$titulo','$descripcion',CURRENT_DATE);";
        }

        $guardar = mysqli_query($db,$sql);
        header('Location: index.php');
    }else{
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['editar'])){
            header('Location: editar-entradas.php?id= '.$_GET['editar']);
        }else {
            header('Location: crear-entradas.php ');
        }
    }

}

