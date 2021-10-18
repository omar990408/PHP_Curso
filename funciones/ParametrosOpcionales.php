<?php


function suma($num1,$num2,$op = false){
    if ($op){
        echo '<h1>';
    }
    $total = $num1 + $num2;
    echo "$num1 + $num2 = $total";

    if ($op){
        echo '</h1>';
    }
}
suma(2,4,true);
suma(50,50.4);
?>