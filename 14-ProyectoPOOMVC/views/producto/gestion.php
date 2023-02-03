<h1>Gestion de Productos</h1>
<a  class="button button-small" href="<?=base_url?>Producto/crear">
    Crear Producto
</a>

<?php if (isset($_SESSION['producto']) and $_SESSION['producto'] == 'complete' ):?>
    <strong class="alert_green">El producto se añadido correctamente</strong>
<?php elseif (isset($_SESSION['producto']) and $_SESSION['producto'] != 'complete') :?>
    <strong class="alert_red">El producto no se añadido correctamente</strong>
<?php endif; ?>
<?php   Utils::deleteSession('producto')?>

<?php if (isset($_SESSION['delete']) and $_SESSION['delete'] == 'complete' ):?>
    <strong class="alert_green">El producto se ha eliminado correctamente</strong>
<?php elseif (isset($_SESSION['delete']) and $_SESSION['delete'] != 'complete') :?>
    <strong class="alert_red">El producto no se ha eliminado correctamente</strong>
<?php endif; ?>
<?php   Utils::deleteSession('delete')?>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
    <?php while ($prod = $productos->fetch_object()): ?>
        <tr>
            <td><?= $prod->id ?></td>
            <td><?= $prod->nombre ?></td>
            <td><?= $prod->precio ?></td>
            <td><?= $prod->stock ?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$prod->id?>" class="button button-gestion">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$prod->id?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>