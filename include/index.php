<?php
include 'includes/cabecera.php';
?>
<hr>
<div>
    <h2>Esta es la pagina de inicio</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus eveniet nisi in provident, aspernatur nam quos architecto, assumenda, voluptatem blanditiis. Rerum ipsa ducimus itaque, cupiditate necessitatibus assumenda quas iusto?
        In sit placeat, velit est odit et quos temporibus nobis, ea impedit vero, vel culpa nostrum itaque adipisci. Blanditiis temporibus illum neque quos perspiciatis eos consequatur, cum amet delectus voluptatum.
        Assumenda, natus nam! Sapiente eaque ad incidunt similique consequatur aperiam laudantium delectus cum inventore facere. Aspernatur enim rem quo cum beatae, libero eius ut assumenda suscipit error laborum eveniet nesciunt.</p>
</div>
<hr>
<!-- Es posible usar la variables creadas en otros ficheros php, ya que se heredan, EN ESTE CASO EN CABECERA.PHP ya que se ejecuta de arriba a abajo -->
<?php
include 'includes/footer.php';
?>
</body>

<!-- Ademas
es posible usaar include_once: ejecuta una sola vez, y puede ejecutar la pagina, aun exista errores

require: similar a include solo que detiene la ejecución si algo esta mal en el fchero PHP

requiere_once: similar a include_once con su caracterisitica de detener totalmente la ejecución del fichero

-->
</html>
