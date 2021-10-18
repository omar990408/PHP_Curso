<?php
/*
 * Ejercicio 1: Crear una sesion que aumente su valor en uno o disminuya
 * en uno en funcion de si el parametro get counter esta en uno o en cero
 */
session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}
if(isset($_GET['counter']) and $_GET['counter']==1){
    $_SESSION['numero']++;
}
if(isset($_GET['counter']) and $_GET['counter']==0){
    $_SESSION['numero']--;
}
?>
<h1>El valor de la sesion es <?= $_SESSION['numero'] ?></h1>
<a href="e1.php?counter=1">AUMENTAR</a>
<a href="e1.php?counter=0">DISMINUIR</a>
<a href="e1ADD.php">NEXT PAGE</a>

