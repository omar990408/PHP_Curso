<?php
if(isset($_POST)) {
    require_once "includes/conexion.php";

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

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

    if (count($errores) == 0){
        $sql = "INSERT INTO categorias values (null , '$nombre');";
        $guardar = mysqli_query($db,$sql);
    }

}
header('Location: index.php');
