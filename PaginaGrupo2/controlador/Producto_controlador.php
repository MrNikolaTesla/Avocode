<?php

require_once("../modelo/Productos_modelo.php");

$productos = new productos_modelo();

$matrizProductos = $productos->get_productos();

require_once("../vista/Productos_view.php");

?>