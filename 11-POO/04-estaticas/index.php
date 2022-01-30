<?php

require_once "configuracion.php";
Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewLetter(true);
echo Configuracion::$color . "<hr>";
echo Configuracion::$entorno . "<hr>";
echo Configuracion::$newLetter . "<hr>";