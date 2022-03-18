<h1>Listado de usuarios</h1>
<?php while ($usuario = $todosUsuarios->fetch_object()):?>
    <?=$usuario->email?> - <?=$usuario->fecha?> <br>
<?php endwhile; ?>