<?php require_once "includes/conexion.php"; ?>
<?php require_once "includes/helpers.php"; ?>
<?php require_once "includes/redireccion.php"; ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada_actual['id'])) {
    header("Location:index_maqueta.php");
}
?>

<?php require_once "includes/cabecera.php"; ?>
<!--SIDEBAR-->
<?php require_once "includes/lateral.php"; ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Editar Entrada</h1>
    <p>Edita tu entrada <?= $entrada_actual['titulo'] ?></p><br>
    <form action="guardar-entrada.php?editar=<?= $entrada_actual['id'] ?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="" value="<?= $entrada_actual['titulo'] ?>">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="" cols="30" rows="10"><?= $entrada_actual['descripcion'] ?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>


        <label for="categoria">Categoria</label>
        <select name="categoria" id="">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):

                    ?>
                    <option value="<?=$categoria['id']?>" <?= ($categoria['id']==$entrada_actual['categoria_id']) ? 'selected = "selected"' : ''?> >
                        <?= $categoria['nombre'] ?>
                    </option>
                <?php

                endwhile;
            endif;
            ?>
        </select>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores();?>




</div>

<?php require_once "includes/pie.php"; ?>
