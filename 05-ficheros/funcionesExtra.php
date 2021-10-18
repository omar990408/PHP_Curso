<?php
//COPIAR ARCHIVOS

//copy("fichero_texto.txt","fichero_copia.txt") or die("ERROR!!!");

// RENOMBRAR ARCHIVOS

//rename("fichero_copia.txt","fichero_recopiadito.txt");

//ELIMINAR
//unlink('fichero_recopiadito.txt') or die('Error');

//COMPROBAR SI EXISTE UN FICHERO

if(file_exists('fichero_texto.txt')){
    echo 'Existe!!';
}else{
    echo 'No existe!!';
}