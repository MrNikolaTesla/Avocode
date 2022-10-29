<?php
if(!empty($_POST["busqueda"])){

$reserva = $_POST["reserva"];

require_once("modelo/Reserva.php");

$reservas = new Reserva();

$matrizReserva = $reservas->buscar_reservas($reserva);

require_once("vista/Reserva_view.php");
}
