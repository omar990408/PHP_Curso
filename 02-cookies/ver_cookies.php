<?php
// Para mostrar cookies -> $_COOKIE; Var super global, array asociativo

if(isset($_COOKIE['miCookie'])){
    echo "<h1>".$_COOKIE['miCookie']."</h1>";
}else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['aYear'])){
    echo "<h1>".$_COOKIE['aYear']."</h1>";
}else{
    echo 'No existe la cookie';
}
?>
<a href="crearCookies.php">Creame</a>
<a href="borrar_cookies.php">Borrame</a>