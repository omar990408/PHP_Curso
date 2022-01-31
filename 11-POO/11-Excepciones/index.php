<?php
//Capturan Excepciones

try {

    if (isset($_GET['id'])){
        echo "<h1> El parametro es {$_GET['id']} </h1>";
    }else{
        throw new Exception('Faltan Parametros por Url');
    }
}catch (Exception $e){
    echo "Error Papu: {$e->getMessage()}";
} finally {
    echo "<br>Todo bien Papu";
}



