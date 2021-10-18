<?php

echo "<table border='1px'>";

echo "<tr>";
for ($i = 0; $i <= 10; $i++) {
    echo "<td>Tabla del $i</td>";
}
echo "</tr>";


for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 10; $j++) {
        echo "<td>$j x $i = " . $i * $j . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
