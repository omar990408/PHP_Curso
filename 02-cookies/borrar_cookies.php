<?php
//borrar cookies
if (isset($_COOKIE['miCookie'])) {
    unset($_COOKIE['miCookie']);
    // debemos caducar la cookie
    setcookie('miCookie','',time()-100);
}
//redireccionar
header('Location:ver_cookies.php');
