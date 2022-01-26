<?php
require_once "coche.php";

$coche = new Coche("Amarillo","Chevrolet","Camaro",120,20,2);
$coche2 = new Coche("Amarillo","Ferrari","Aventador",120,20,2);
//var_dump($coche);
//var_dump($coche2);
//Publico
$coche->color = 'Rosa';
//Protected
//$coche->marca = 'Ferrari';
$coche->setMarca('Audi');
var_dump($coche);
// privado
//echo $coche->modelo;
echo $coche->getModelo();

echo '<hr>';
echo $coche2->mostrarInfo();