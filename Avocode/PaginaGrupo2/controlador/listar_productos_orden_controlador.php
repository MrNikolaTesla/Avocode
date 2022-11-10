<?php
session_start();
require_once("modelo/Orden.php");
$orden = new Orden();

if (isset($_GET['id'])) {

    $id_orden = $_GET['id'];

    $resultado = $orden->listar_productos_orden($id_orden);

    if ($resultado) {
        require_once("vista/Productos_Orden_ADMIN_VISTA.php");
    } else {
?>
        <div class="no_hay_registros">
            <?php echo "No hay productos registrados en esta orden"; ?>
        </div>
<?php
    }
}
?>