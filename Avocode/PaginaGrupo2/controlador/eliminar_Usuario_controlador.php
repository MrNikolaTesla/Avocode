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
        $estado = $usuario->eliminar_usuario($id);

if($estado== 1) {
    $_SESSION['message'] = 'Usuario eliminado correctamente';
    header("Location: ../PAGINA_GestionUsuarios.php");
}else if($estado == 2){
    $_SESSION['message'] = 'No puedes eliminarte a ti mismo!';
    header("Location: ../PAGINA_GestionUsuarios.php");
}else if($estado==0){
    $_SESSION['message'] = 'No tienes los permisos para realizar esta accion.';
    header("Location: ../PAGINA_GestionUsuarios.php");
}else{
    $_SESSION['message'] = 'El usuario seleccionado no existe.';
    header("Location: ../PAGINA_GestionUsuarios.php");
}
}else{
    header("Location: ../PAGINA_GestionUsuarios.php");
}
?>