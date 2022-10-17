<?php

require_once("modelo/Mesa.php");

$mesas = new Mesa();

$matrizMesa = $mesas->listar_mesas();

require_once("vista/Mesa_view.php");

?>