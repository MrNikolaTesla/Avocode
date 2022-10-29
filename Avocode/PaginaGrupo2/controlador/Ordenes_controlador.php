<?php

require_once("modelo/Orden.php");

$orden = new Orden();

$matrizOrden = $orden->listar_ordenes();

if ($matrizOrden) {
    require_once("vista/Orden_view.php");
} else {
?>
    <div class="no_hay_registros">
        <?php echo "No hay ordenes registradas en el sistema"; ?>
    </div>
<?php
}

?>