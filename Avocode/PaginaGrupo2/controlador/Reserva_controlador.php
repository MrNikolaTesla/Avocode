<?php

require_once("modelo/Reserva.php");

$reservas = new Reserva();

$matrizReserva = $reservas->listar_reservas();

require_once("vista/Reserva_view.php");

?>