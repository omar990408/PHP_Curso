<h1>Productos</h1>
<?php while ($pro = $productos->fetch_object()): ?>
    <div class="product">
        <a href="<?=base_url?>Producto/ver&id=<?=$pro->id?>">
        <?php if ($pro->imagen != null): ?>
            <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="">
        <?php else: ?>
            <img src="<?=base_url?>assets/img/camiseta.png" alt="">
        <?php endif; ?>
        <h2><?= $pro->nombre?></h2>
        <p>$<?= $pro->precio?></p>
        </a>
        <a href="<?=base_url?>Carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
    </div>
<?php endwhile; ?>




