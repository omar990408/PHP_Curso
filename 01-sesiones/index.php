<?php
//SESIONES 
/* Almacenar y persistir datos del usuario mientras navega hasta que cierra sesión o cierra el navegador -> Ej: carrito de compras en una tienda online
* Son seguras ya q se guardan en el servidor */

//INICIAR SESION
session_start();
//VAR LOCAL
$var_normal = 'Soy una cadena de texto';
//VAR DE SESION
$_SESSION['var_persistente'] = "Hola soy una sesion activa"; // se pone el indice de la sesion que quiero crar|| Ademas se podra usar esta variable en cualquier pagina del dominio
echo $var_normal.'<br>';
echo $_SESSION['var_persistente'];
