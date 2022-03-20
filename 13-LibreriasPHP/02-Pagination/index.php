<?php
require_once "../vendor/autoload.php";
//CONEXION
$conexion = new mysqli("localhost","root","","notas_master");
$conexion->query("SET NAMES 'utf8'");

//CONSULTA A PAGINAR
$consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta -> num_rows;
//var_dump($numero_elementos);
$numero_elementos_pagina = 2;

//hacer pagination
$pagination = new Zebra_Pagination();

//Numero total de elementos
$pagination->records($numero_elementos);

//Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

$page = $pagination->get_page();
$empieza = (($page - 1)*$numero_elementos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza,$numero_elementos_pagina";
$notas = $conexion->query($sql);


echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3> <hr>";
}

$pagination->render();