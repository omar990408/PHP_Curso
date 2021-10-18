<?php

$texto = "";
if (empty($texto)){
    $texto = 'Hola amigo';
    $textoM = strtoupper($texto);
    echo "<b>$textoM</b>";
}