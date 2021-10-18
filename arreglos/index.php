<?php
$nombre = '   Batman    ';
var_dump(trim($nombre));
$pelis = array('Spiderman', 'Super Man', 'Supercampeones');
var_dump($pelis);
echo $pelis[2];
$players = ['Messi','Ronaldo','Neymar'];
var_dump($players);
echo '<br>';
echo $players[0];
echo '<hr>';
// Recorrer con for
echo '<h1>Listado de peliculas</h1>';
for($i=0;$i < count($players);$i++){
    echo $pelis[$i]."<br>";
}
// con foreach 
echo '<h1>Listado de jugadores</h1>';
foreach($players as $jugador){ // por cada iteración crea una varibale
    echo $jugador.'<br>';
}
// ARREGLOS ASOCIATIVOS
echo '<hr>';
$personas = array(
    'nombre' => 'Victor',
    'apellido' => 'Pilco',
    'web' => 'www.wwe.com'
);
var_dump($personas);
// para ver un indice de ARREGLOS ASOCIATIVOS
var_dump($personas['nombre']);
// ARREGLOS MULTIDIMENSIONALES
echo '<hr>';
$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@hotmail.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@hotmail.com'
    ),
    array(
        'nombre' => 'Pablo',
        'email' => 'pablo@hotmail.com'
    )
);
var_dump($contactos);
var_dump($contactos[1]['nombre']);