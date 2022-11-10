<?php
session_start();
require_once("modelo/Orden.php");
$orden = new Orden();

if (isset($_GET['id'])) {

    $id_orden = $_GET['id'];

    $resultado = $orden->listar_productos_orden($id_orden);

    if ($resultado) {
        require_once("vista/Productos_Orden_CLIENTE.php");
    } else {
?>
        <div class="div-menu">
            <?php echo "No hay productos dentro de esta orden"; ?>
            <button class="button-2"><a href="PAGINA_MisOrdenes.php" style="color:white;text-decoration:none;">Regresar</a></button>
        </div>
<?php
    }
}
?>