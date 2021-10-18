<?php
function mostrar($arreglo)
{
    foreach ($arreglo as $numero) {
        echo "$numero <br>";
    }
}
$arreglo = [10, 2233, 312, 4554, 5, 612, 71, 833];
var_dump($arreglo);
// Recorrer y mostrar
mostrar($arreglo);
echo '<hr>';
//Ordenarlo
echo '<hr>';
asort($arreglo);
mostrar($arreglo);
//Longitud
echo 'La longitud del arreglo es: ' . count($arreglo);
//Buscar
echo '<hr>';
echo 'Ingrese por metodo Get un valor a buscar <br>';
if (isset($_GET['numero'])) {
    $bandera = array_search($_GET['numero'], $arreglo);
    if (!$bandera){
          echo 'No se ha encontrado ese numero';  
    }else{
        echo "el numero ".$_GET['numero']." se encuentra en la pos $bandera";
    }
}else{
    echo "<h2> No ha ingresado un numero</h2>";
}
