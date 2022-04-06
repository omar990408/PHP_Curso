<?php require_once "includes/conexion.php"; ?>
<?php require_once "includes/helpers.php"; ?>
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


    <h1><?= $entrada_actual['titulo'] ?></h1>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?= $entrada_actual['categoria'] ?></h2>
    </a>


    <h4><?= $entrada_actual['fecha'] ?> | <?= $entrada_actual['usuario'] ?> </h4>
    <p>
        <?= $entrada_actual['descripcion'] ?>
    </p>

    <?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
        <a class="boton boton-verde" href="editar-entrada.php?id=<?= $entrada_actual['id'] ?>">Editar Entradas</a>
        <a class="boton" href="borrar-entrada.php?id=<?= $entrada_actual['id'] ?>">Eliminar Entradas</a>
    <?php   endif;?>


</div>

<?php require_once "includes/pie.php"; ?>


