<?php
require_once "../vendor/autoload.php";

$frutas = ["manzanas","naranjas","sandias"];
$nombres = array(
    "ejecutivo" => "Antonio",
    "empleado" => "Juan"
);
\FB::log($frutas);
\FB::log($nombres);
echo "Hola Mundo";

\FB::log("Mustrame en consola");