<?php

require_once("modelo/Reserva.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

$reserva_mod = new Reserva();

$reserva_modificar = $reserva_mod->get_data($id);

require_once("vista/Modificar_reserva_view.php");
}
?>