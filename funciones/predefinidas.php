<?php
echo "<h1>FUNCINONES PREDEFINIDAS</h1>";
// DEBUGGEAR
$var = "Hola papu";
var_dump($var); // Info de la variable
// FECHAS
echo date('d-m-Y');
echo '<br>';
echo time();
echo '<br>';
// MATE
echo "Raiz cuadrada de 10: " . sqrt(10);
echo '<br>';
echo 'Numero Aleatorio: ' . rand();
echo '<br>';
echo 'Numero Aleatorio entre de 10 y 40: ' . rand(10, 40);
echo '<br>';
echo 'Numero PI: ' . pi();
echo '<br>';
echo 'Rodondeo de cifras: ' . round(7.7923); // le redondea al numero entero
echo '<br>';
echo 'Rodondeo de cifras: ' . round(7.7983, 2); // 2 decimales exactos
// MAS FUNCIONES
echo '<br>';
echo gettype($var); // da el tipo de variable 
echo '<br>';
//Detectar Tipado
if (is_string($var)) { // is_***** Ful tipo de funciones
    echo "Valio XD";
} else {
    echo 'No funco :(';
}
echo '<br>';
if(isset($edad)){ // isset -> verifica q una variable exista
    echo 'la variable existe';
    
}else{
    echo 'No existe';
}
echo '<br>';
$frase = "    5-0 Coqueta     ";
echo $frase;
var_dump($frase);
var_dump(trim($frase)); // trim -> Elimina espacios por detras y por delante// Sanea las variables
$year = 2021;
unset($year); //elimina la variable 
//var_dump($year);
// COMPROBAR VARIABLE VACIA
$texto = ''; // empty para strings, 0, null
if(empty($texto)){
    echo 'Vacio';
}else{
    echo 'Lleno';
}
//Contar caracteres
echo '<br>';
$cadena = '  123456  ';
echo strlen(trim($cadena));
// encontar un caracter
echo '<br>';
$oracion = "La vida es bella";
echo strpos($oracion,'bella');//da el indice donde empieza la palabra a buscar
// Reemplazar palabra de un string
$oracion = str_replace("vida","Marrana",$oracion);
echo '<br>';
echo $oracion;
// Mayusculas y Minusculas
echo '<br>';
echo strtolower($oracion);
echo '<br>';
echo strtoupper($oracion);