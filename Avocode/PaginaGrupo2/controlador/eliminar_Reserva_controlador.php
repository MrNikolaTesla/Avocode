<?php
session_start();
require_once("../modelo/Reserva.php");
    $reserva = new Reserva();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $estado = $reserva->eliminar_reserva($id);

if($estado==1) {
    $_SESSION['message'] = 'Reserva eliminada correctamente';
    header("Location: ../PAGINA_GestionReservas.php");
}else{
    $_SESSION['message'] = 'No se ha podido eliminar la reserva seleccionada.';
    header("Location: ../PAGINA_GestionReservas.php.php");
}

}else{
    $_SESSION['message'] = 'La reserva seleccionada no existe.';
    header("Location: ../PAGINA_GestionReservas.php.php");
}

?>