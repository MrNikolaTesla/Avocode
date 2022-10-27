<?php
session_start();
require_once("../modelo/Orden.php");
    $orden = new Orden();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $orden->eliminar_orden($id);

if($estado==1) {
    $_SESSION['message'] = 'Orden eliminada correctamente';
    header("Location: ../PAGINA_GestionOrdenes.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar la orden seleccionada.';
    header("Location: ../PAGINA_GestionOrdenes.php");
}

}else{
    $_SESSION['message'] = 'La orden seleccionada no existe.';
    header("Location: ../PAGINA_GestionOrdenes.php");
}

?>