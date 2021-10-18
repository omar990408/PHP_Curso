<?php

$tabla = array(
    'ACCION' => ['GTA', 'COD', 'PUGB'],
    'AVENTURA' => ['ASSASINS', 'CRASH', 'PRINCE OF PERSIA'],
    'DEPORTES' => ['FIFA', 'PES', 'MOTO GP']
);
$categorias = array_keys($tabla); // array keys guarda los nombres de los indices
?>
<table border="1">
    <?php require_once('e4/encabezado.php'); ?>
    <?php require_once('e4/f1.php'); ?>
    <?php require_once('e4/f2.php'); ?>
    <?php require_once('e4/f3.php'); ?>
</table>