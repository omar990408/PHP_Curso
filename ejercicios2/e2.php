<?php
$arreglo = array();
for ($i = 0; $i < 120;$i++){
    array_push($arreglo,$i);
}
foreach($arreglo as $numero){
    echo $numero.'<br>';
}
echo '<hr>';
echo count($arreglo);