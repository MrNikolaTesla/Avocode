<?php

require_once("modelo/Reserva.php");

$reservas = new Reserva();

$matrizReserva = $reservas->listar_reservas();

if ($matrizReserva) {
    require_once("vista/Reserva_VISTA.php");
} else {
?>
    <div class="no_hay_registros">
        <?php echo "No hay reservas registradas en el sistema"; ?>
    </div>
<?php
}

?>