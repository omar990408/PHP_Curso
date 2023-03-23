<h1>Carrito de la compra</h1>
<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
        <th>Eliminar</th>
    </tr>
<!--    --><?php //var_dump($carrito); ?>
    <?php foreach ($carrito as $indice => $elemento): ?>
        <?php $producto = $elemento['producto']; ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null): ?>
                    <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" alt="" class="img_carrito">
                <?php else: ?>
                    <img src="<?=base_url?>assets/img/camiseta.png" alt="" class="img_carrito">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?=base_url?>Producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
            </td>
            <td>
                <?=$producto->precio?>
            </td>
            <td>
                <?=$elemento['unidades']?>
                <div class="updown-unidades">
                    <a href="<?=base_url?>Carrito/up&index=<?=$indice?>" class="button">+</a>
                    <a href="<?=base_url?>Carrito/down&index=<?=$indice?>" class="button">-</a>
                </div>
            </td>
            <td>
                <a href="<?=base_url?>Carrito/remove&index=<?=$indice?>" class="button button-carrito button-red">Eliminar producto</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br>
<div class="total-carrito">
    <?php $stats = Utils::statsCarrito(); ?>
    <h3>Total a pagar: $<?=$stats['total']?></h3>
    <a href="<?=base_url?>Pedido/hacer" class="button button-pedido">Hacer pedido</a>
</div>
