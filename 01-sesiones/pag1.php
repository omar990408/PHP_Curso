<?php
// hay que iniciar sesion en todos los ficheros donde vayamos usar la varibale superglobal
session_start();

if(isset($var_normal))
    echo $var_normal.'<br>';
echo $_SESSION['var_persistente'];