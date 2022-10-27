<?php

session_start(); 
//////
require_once("../modelo/Mesa.php");
$mesa_mod = new Mesa();
//////

if(isset($_GET['id'])){

$id = $_GET['id'];

//////
$proveedores = new Proveedor();
//////

//////
$matrizProveedor = $proveedores->buscar_proveedores($proveedor);
//////

//////
require_once("vista/Proveedor_view.php");
//////
}

?>