<?php require_once "includes/cabecera.php"; ?>
<!--SIDEBAR-->
<?php require_once "includes/lateral.php"; ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Todas las Entradas</h1>

    <?php
    $entradas = conseguirEntradas($db);
    if (!empty($entradas)):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article class="entrada">
                <a href="entrada.php?id=<?= $entrada['id'] ?>">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span class="fecha"><?= $entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p><?= $entrada['descripcion'] ?></p>
                </a>
            </article>
        <?php
        endwhile;
    endif;
    ?>

</div>

<?php require_once "includes/pie.php"; ?>


