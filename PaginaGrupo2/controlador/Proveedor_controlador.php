<?php

require_once("../modelo/Proveedor_modelo.php");

$proveedores = new proveedores_modelo();

$matrizProveedor = $proveedores->get_proveedores();

require_once("../vista/Proveedor_view.php");

?>