<?php

require_once("modelo/Producto.php");

$productos = new Producto();

$matrizProducto = $productos->listar_productos();

require_once("vista/Cartilla_VISTA.php");

?>