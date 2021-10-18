<?php
//ABRIR ARCHIVOS
// fopen(nombreArchivo,modeo{read,write,execute})
$abrir_A = fopen("fichero_texto.txt","a+");

//LEER ARCHIVOS -> Primera Linea
/*$contenido = fgets($abrir_A);
echo $contenido;*/
//Todas las lineas
while(!feof($abrir_A)){
    $contenido = fgets($abrir_A);
    echo $contenido.'<br>';
}

//ESCRIBIR UN TEXTO
fwrite($abrir_A,"**SOY UN TEXTO RICOLIN**");

//CERRAR ARCHIVO
fclose($abrir_A);
