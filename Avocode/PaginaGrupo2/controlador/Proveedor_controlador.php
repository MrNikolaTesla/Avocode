<?php

require_once("../modelo/Proveedor.php");

$proveedores = new Proveedor();

$matrizProveedor = $proveedores->listar_proveedores();

require_once("../vista/Proveedor_view.php");

?>