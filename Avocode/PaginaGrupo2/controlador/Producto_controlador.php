<?php

require_once("../modelo/Producto.php");

$productos = new Producto();

$producto_modificar = $productos->listar_productos();

require_once("../vista/Productos_view.php");

?>