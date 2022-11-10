<?php

require_once("modelo/Orden.php");

$orden = new Orden();
if (isset($_SESSION['id_orden_actual'])) {
  $orden_cargada = $_SESSION['id_orden_actual'];

  $matrizProdOrden = $orden->listar_productos_orden($orden_cargada);

  if ($matrizProdOrden) {
    require_once("vista/Productos_Orden_CARTILLA_VISTA.php");
  } else {
    echo
    '<div class="div-menu">
    <h3>Tu Orden:</h3>
    <p>No cuentas con productos dentro de tu orden</p>
    <button class="button-3">
    <a href="controlador/Controlador_CancelarOrden.php" style="color:white; text-decoration:none;">Cancelar Orden</a>
    </button>
    </div>'; ?>
  <?php
  }
}
  ?>