<?php

require_once("modelo/Usuario.php");

$clienteReserva = new Usuario();

$matrizClienteReserva = $clienteReserva->listar_clientes();

if ($matrizClienteReserva) {
    require_once("vista/ClienteReserva_view.php");
} else {
?>
    <div class="no_hay_registros"><?php echo "No hay clientes registrados en el sistema"; ?></div>
<?php
}
?>