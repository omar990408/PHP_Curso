<?php
require_once "includes/conexion.php";
if(isset($_SESSION['usuario']) and isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas where usuario_id = $usuario_id and id = $entrada_id ";
    mysqli_query($db,$sql);
}
header("Location: index_maqueta.php");