<?php
//$_FILES -> Para Archivos, es una var super global
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"  ){
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    header("Refresh: 5; URL= index.php");
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    echo "<h1 style='color: chartreuse'> Imagen subida correctamente puto ..</h1>";
}else{
    header("Refresh: 5; URL= index.php");
    echo '<h1 style="color: red">Sube una imagen con un formato correcto puto...</h1>';
}