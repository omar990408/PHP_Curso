<?php
//$servidor = "localhost";
//$usuario = "root";
//$password = "";
//$basededatos = "blog_master";
$servidor = "db.c8u6sooif7wv.us-west-1.rds.amazonaws.com";
$usuario = "admin";
$password = "LigaDeQuitoNachoTuPapa";
$basededatos = "blog_master";
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

mysqli_query($db, "SET NAMES 'UTF-8'");

//Iniciar sesion
if (!isset($_SESSION)) {
    session_start();
}