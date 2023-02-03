<?php if (isset($edit) and isset($prod) and is_object($prod)): ?>
    <h1>Editar Producto - <?=$prod->nombre?></h1>
    <?php
    $url_action = base_url . "Producto/save&id=" . $prod->id;
    ?>
<?php else: ?>
    <h1>Crear nuevo Producto</h1>
    <?php
    $url_action = base_url . "Producto/save";
    ?>
<?php endif; ?>

<div class="form_container">
    <form action="<?=$url_action?>" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="" value="<?= isset($prod) && is_object($prod) ? $prod->nombre : '' ?>">

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="" cols="30" rows="10"><?= isset($prod) && is_object($prod) ? $prod->descripcion : '' ?></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" id="" value="<?= isset($prod) && is_object($prod) ? $prod->precio : '' ?>">

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="" value="<?= isset($prod) && is_object($prod) ? $prod->stock : '' ?>">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias();?>
        <select name="categoria" id="">
            <?php while ($cat = $categorias->fetch_object()) :?>
                <option value="<?= $cat->id ?>" <?= isset($prod) && is_object($prod) && $cat->id == $prod->categoria_id ? 'selected' : '' ?>>
                    <?= $cat->nombre ?>
                </option>
            <?php endwhile;?>
        </select>

        <label for="imagen">Imagen</label>
        <?php if (isset($prod) && is_object($prod) && !empty($prod->imagen)): ?>
            <img src="<?=base_url?>uploads/images/<?=$prod->imagen?>" class="thumb">
        <?php endif; ?>
        <input type="file" name="imagen" id="">

        <input type="submit" value="Guardar">
    </form>
</div>