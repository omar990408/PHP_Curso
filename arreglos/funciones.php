<?php
$players = ['Messi', 'Ronaldo', 'Neymar', 'Alfredo'];
//ORDENAR
asort($players); // ASORT -> ordena una lista e incluso numeros
arsort($players); // ASORT -> ordena una lista de manera inversa e incluso numeros
var_dump($players);
//AÑADIR ELEMENTOS
echo '<hr>';
$players[] = 'Zidane';
array_push($players,'David');
var_dump($players); 
// Eliminar
array_pop($players);// elimina el ultimo elemento
unset($players[3]);// elimina el indice deseado
var_dump($players); 
// SACAR ELEMENTOS ALEATORIOS DE UN ARREGLO
echo '<hr>';
$indice = array_rand($players);
var_dump($players[$indice]); 
echo '<hr>';
// Dar la vuelta a un arreglo
var_dump(array_reverse($players));
//BUSCAR DENTRO DE UN ARRAY
echo '<hr>';
$resultado =  array_search('Messi',$players); // da el indice donde se encuentra la opción a buscar
var_dump($resultado);
echo '<hr>';
//CONTAR ELEMENTOS
echo count($players);
echo '<br>';
echo sizeof($players);