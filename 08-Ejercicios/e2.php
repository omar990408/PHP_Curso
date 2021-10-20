<?php
/*
 * EJERCICIO 2
 * 1. Una funcion
 * 2. Validar un email con filter_var
 * 3. Recoger variable por get y vaidarla
 * 4.Mostrar el resultado
 */
function validarMail($mail){
    $bandera = filter_var($mail,FILTER_VALIDATE_EMAIL);
    if($bandera){
        echo "<h2>Tu mail: $mail es valido</h2>";
    }else{
        echo "<h2>Tu mail: $mail es invalido</h2>";
    }
}

if(isset($_GET['mail'])){
    validarMail($_GET['mail']);
}else{
    echo "Ingreso un mail mediante GET en la url";
}