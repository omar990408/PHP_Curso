<?php

/*
VARIABALES LOCALES
    Se crean dentro de una función;
VARIABLES GLOBALES
    Se declaran fuera de las funciones, y estan disponibles.
*/
$frase =  "QUE MAS VE! XD";
echo $frase;

function imprimir (){
    global $frase; // se debe declarar global para que pueda tomar el valor de la variable.
    echo "<h2>$frase</h2>";
}
imprimir();
echo "<hr>";
// FUNCIONES VARIABLES
function buenosDias(){
    return "<h1>5-0 COQUETA</h1>";
}
function buenasNoches(){
    return "<h1>Te acuerdas y te duele</h1>";
}

$var = "buenosDias";
echo $var();

$var2 = "Noches";
$myFunction = "buenas".$var2;

echo $myFunction();
?>