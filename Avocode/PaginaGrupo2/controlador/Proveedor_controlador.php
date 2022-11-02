<?php

require_once("modelo/Proveedor.php");

$proveedores = new Proveedor();

$matrizProveedor = $proveedores->listar_proveedores();

if ($matrizProveedor) {
    require_once("vista/Proveedor_VISTA.php");
} else {
?>
    <div class="no_hay_registros">
        <?php echo "No hay proveedores registrados en el sistema"; ?>
    </div>
<?php
}

?>