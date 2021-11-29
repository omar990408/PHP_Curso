<?php require_once "includes/redireccion.php";?>
<?php require_once "includes/cabecera.php"; ?>
<?php require_once "includes/lateral.php"; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear Categorias</h1>
    <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas.</p><br>
    <form action="guardar-categoria.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="">
        <input type="submit" value="Guardar">
    </form>

</div>

<?php require_once "includes/pie.php"; ?>
