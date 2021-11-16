<?php require_once "helpers.php"; ?>
<asside id="sidebar">

    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">

            <h3> Bienvenido <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'] ?></h3>
            <!--            BOTONES-->
            <a class="boton boton-verde" href="cerrar.php">Crear Entradas</a>
            <a class="boton" href="cerrar.php">Crear categorias</a>
            <a class="boton boton-naranja" href="cerrar.php">Mis datos</a>
            <a class="boton boton-rojo" href="cerrar.php">Cerrar sesión</a>
        </div>
    <?php endif; ?>
    <div id="login" class="bloque">
        <h3>Ingreso</h3>

        <?php if (isset($_SESSION['error_login'])): ?>
            <div class="alerta alerta-error">

                <h3> <?= $_SESSION['error_login']; ?></h3>

            </div>
        <?php endif; ?>


        <form action="login.php" method="post">

            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="">

            <input type="submit" value="Entrar">

        </form>
    </div>

    <div id="registre" class="bloque">

        <h3>Registrate</h3>

        <?php
        //var_dump($_SESSION);
        //Mostrar errores
        if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>

        <form action="registro.php" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password" id="">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

            <input type="submit" value="Registrarse">

        </form>
        <?php borrarErrores(); ?>
    </div>

</asside>
