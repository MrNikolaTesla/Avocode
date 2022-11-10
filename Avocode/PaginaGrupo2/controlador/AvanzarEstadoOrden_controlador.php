<?php
session_start();
require_once("../modelo/Orden.php");
$orden_a_avanzar = new Orden();
if (isset($_GET['id'])) {

    $id_orden = $_GET['id'];

    $estado = $orden_a_avanzar->update_orden_avanzar($id_orden);

    if ($estado == 1) {
        $_SESSION['message'] = 'Estado de la orden avanzado correctamente';

        header("Location: ../PAGINA_GestionOrdenes.php");
    } else if ($estado == 2) {
        $_SESSION['message'] = 'Esta orden ya esta completada!';

        header("Location: ../PAGINA_GestionOrdenes.php");
    } else if ($estado == 3) {
        $_SESSION['message'] = 'Este cliente aun esta generando su orden.';

        header("Location: ../PAGINA_GestionOrdenes.php");
    } else {
        $_SESSION['message'] = 'Estado de la orden no modificado, algo ha fallado.';
        header("Location: ../PAGINA_GestionOrdenes.php");
    }
}
?>