<?php
session_start();
require_once("modelo/Orden.php");

$orden = new Orden();

$id = $_SESSION['id'];

$matrizOrden = $orden->listar_ordenes_usuario($id);

if ($matrizOrden) {
    require_once("vista/OrdenUsuario_VISTA.php");
} else {
?>
        <?php echo "No cuentas con ordenes en el sistema"; ?>
<?php
}

?>