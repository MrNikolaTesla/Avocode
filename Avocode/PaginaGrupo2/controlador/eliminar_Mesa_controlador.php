<?php
    session_start(); 
    require_once("../modelo/Mesa.php");
    $mesa = new Mesa();
    require_once("../modelo/Orden.php");
    $limpiar_mesas_ordenes = new Orden();
    require_once("../modelo/Reserva.php");
    $limpiar_mesas_reservas = new Reserva();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $limpiar_mesas_ordenes->null_mesas($id);
        $limpiar_mesas_reservas->null_mesas($id);
        $estado = $mesa->eliminar_mesa($id);

if($estado==1) {
    $_SESSION['message'] = 'Mesa eliminada correctamente';
    header("Location: ../PAGINA_GestionMesas.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar la mesa seleccionada.';
    header("Location: ../PAGINA_GestionMesas.php");
}
}else{
    $_SESSION['message'] = 'La mesa seleccionada no existe.';
    header("Location: ../PAGINA_GestionMesas.php");
}

?>