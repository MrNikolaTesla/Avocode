<?php
session_start();
require_once("../modelo/Reserva.php");
    $reserva = new Reserva();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $reserva->eliminar_reserva($id);

if($estado==1) {
    $_SESSION['message'] = 'Reserva eliminado correctamente';
    header("Location: ../PAGINA_GestionReservas.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar el reserva seleccionado.';
    header("Location: ../PAGINA_GestionReservas.php.php");
}

}else{
    $_SESSION['message'] = 'El reserva seleccionado no existe.';
    header("Location: ../PAGINA_GestionReservas.php.php");
}

?>