<?php
require_once("../modelo/Usuario.php");
    $usuario = new Usuario();
    require_once("../modelo/Orden.php");
    $limpiar_usuario_ordenes = new Orden();
    require_once("../modelo/Reserva.php");
    $limpiar_usuario_reserva = new Reserva();
    session_start();

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $limpiar_usuario_ordenes->null_usuario($id);
        $limpiar_usuario_ordenes->null_cliente($id);
        $limpiar_usuario_reserva->null_usuario($id);
        $limpiar_usuario_reserva->null_cliente($id);
        $usuario->eliminar_cuenta($id);

    header("Location: Logout.php");
}
?>