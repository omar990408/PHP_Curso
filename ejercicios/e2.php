<?php
if (isset($_GET['numero1']) and isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            if ($i % 2 != 0) {
                echo "<h3>$i</h3>";
            }
        }
    } else {
        echo '<h2>El numero1 debe ser menor que numero2</h2>';
    }
} else {
    echo "<h2> Ingrese numeros por url mediante GET </h2>";
}
?>