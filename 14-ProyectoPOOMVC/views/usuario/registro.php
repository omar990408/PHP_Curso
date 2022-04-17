<h1>Registrarse</h1>
<?php if (isset($_SESSION['register']) and $_SESSION['register'] == 'complete'):?>
     <strong class="alert_green">Registro Completado Correctamente</strong>
<?php elseif (isset($_SESSION['register']) and $_SESSION['register'] == 'failed'): ?>
    <strong class="alert_red">Registro Fallido</strong>
<?php endif; ?>
<?php Utils::deleteSession('register')?>

<form action="<?=base_url?>Usuario/save" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="" >

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="" >

    <label for="email">Email:</label>
    <input type="email" name="email" id="" >

    <label for="password">Password:</label>
    <input type="password" name="password" id="" >

    <input type="submit" value="Registrarse">
</form>
