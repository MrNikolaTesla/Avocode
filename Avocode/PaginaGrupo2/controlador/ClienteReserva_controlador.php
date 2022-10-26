<?php

require_once("modelo/Usuario.php");

$clienteReserva = new Usuario();

$matrizClienteReserva = $clienteReserva->listar_clientes();

require_once("vista/ClienteReserva_view.php");

?>