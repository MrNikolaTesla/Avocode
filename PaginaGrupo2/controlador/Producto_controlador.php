<?php

require_once("../modelo/Productos_modelo.php");

$productos = new productos_modelo();

$producto_modificar = $productos->get_productos();

require_once("../vista/Productos_view.php");

?>