<?php
//CREAR UN DIRECTORIO
if(!is_dir('miCarpeta')){
    mkdir('miCarpeta',0777) or die('Error al crear el directorio');
}else{
    echo 'Ya existe la Carpeta';
}
echo '<hr>';
//BORRAR DIRECTORIOS
//rmdir('miCarpeta');

// RECORRER DIRECTORIO
if ($gestor = opendir('./miCarpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..')
            echo $archivo.'<br>';
    }

}
