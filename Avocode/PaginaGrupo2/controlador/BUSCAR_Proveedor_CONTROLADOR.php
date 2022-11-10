<?php
if(!empty($_POST["busqueda"])){

$proveedor = $_POST["proveedor"];

require_once("modelo/Proveedor.php");

$proveedores = new Proveedor();

$matrizProveedor = $proveedores->buscar_proveedores($proveedor);

require_once("vista/Proveedor_VISTA.php");
}
