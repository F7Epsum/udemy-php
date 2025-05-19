<?php
include_once 'includes/cabecera.php'; //si hay algun inconveniente la pagina sale igual pero se puede ver igual con error
require_once 'includes/cabecera.php'; //es el que mas estricto nos da para poder arrancar la pagina.
?>
        <!--Contenido-->
        <div>
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba de la pagina de inicioo</p>
        </div>

        <?php echo var_dump($nombre); ?>

<?php
include 'includes/footer.php';
?>