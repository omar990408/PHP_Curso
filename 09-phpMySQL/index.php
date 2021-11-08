<?php
//CONECTAR A LA BASE DE DATOS
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
//COMPROBANDO CONEXION
if (mysqli_connect_errno()) {
    echo "La conexion a la base de datos ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexión realizada correctamente";
}

// Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");
while ($nota = mysqli_fetch_assoc($query)) {
    //var_dump($nota);
    echo "<h1>" . $nota['titulo'] . "</h1>";
    echo "<p>" . $nota['descripcion'] . "</p>";
}
//INSERTAR DATOS EN LA BASE DESDE PHP
$sql = "INSERT INTO notas values (null,'Notas desde PHP','Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo '<hr>';
if ($insert) {
    echo "DATOS ingresados correctamente";
} else {
    echo "ERROR: " . mysqli_error($conexion);
}
