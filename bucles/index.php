<?php
if(isset($_GET['numero'])){ //isset comprueba que existe o no una variable
    $numero = (int) $_GET['numero']; //casting (tipo de dato)
}else{
    $numero = 1;
}
var_dump($numero);
echo "Tabla de multiplicar de $numero <br>";
$contador=0;
while($contador <= 10){
    echo "$numero x $contador = ".$numero*$contador."<br>";
    $contador++;
}
// BREAK -> SALEN DE LOS BUCLES

for($i=0;$i<50;$i++){
    echo "$i <br>";
    if($i==12){
        echo "ADIOS xd";
        break;
    }
}

?>