<?php
/* Normalmente guarda info del usuario
 - Son inseguros, ya que se guardan ficheros en el cliente
 - Se guardan de igual manera en el servidor
 - utiles para recordar el inicio de sesion

 Es un fichero que se almacena en el ordenador del usuario q visita la web con el fin de recordar datos o rastrear el compartamiento del mismo en la web 
 */

 // CREAR COOKIES 
 //setcookie("nombre","valor que puede ser texto",caducidad,ruta,dominio,)
 // Cookie Basica
 setcookie('miCookie','valor de mi galleta');

 // Cookie con expiración 
 setcookie('aYear','365 dias',time()+(60*60*24*365));
 header('Location:ver_cookies.php');
 ?>