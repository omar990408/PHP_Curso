<?php
if(isset($_POST['n1']) and isset($_POST['n2'])){
    $resultado = false;
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1']+$_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1']-$_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1']*$_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1']/$_POST['n2']);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>
<h1>Calculadora PHP</h1>
<form action="" method="post">

    <label for="n1">Numero 1:</label> <br>
    <input type="number" name="n1" id=""><br><br>

    <label for="n2">Numero 2:</label><br>
    <input type="number" name="n2"><br><br>
    <input type="submit" value="Sumar" name="sumar">
    <input type="submit" value="Restar" name="restar">
    <input type="submit" value="Multiplicar" name="multiplicar">
    <input type="submit" value="Dividir" name="dividir">
</form>
<?php
//Resultado
if ($resultado != false):
    echo "<h2> $resultado </h2>";
endif;
?>
</body>
</html>

