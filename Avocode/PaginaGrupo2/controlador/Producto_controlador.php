<?php

require_once("modelo/Producto.php");

$productos = new Producto();

$matrizProducto = $productos->listar_productos();

if ($matrizProducto) {
    require_once("vista/Productos_view.php");
} else {
?>
    <div class="no_hay_registros">
        <?php echo "No hay productos registrados en el sistema"; ?>
    </div>
<?php
}

?>