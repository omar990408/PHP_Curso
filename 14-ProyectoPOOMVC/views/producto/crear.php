<h1>Crear nuevo Producto</h1>
<div class="form_container">
    <form action="<?=base_url?>Producto/save" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" id="">

        <label for="stock">Stock</label>
        <input type="number" name="stock" id="">

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias();?>
        <select name="categoria" id="">
            <?php while ($cat = $categorias->fetch_object()) :?>
                <option value="<?= $cat->id ?>">
                    <?= $cat->nombre ?>
                </option>
            <?php endwhile;?>
        </select>

        <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="">

        <input type="submit" value="Guardar">
    </form>
</div>