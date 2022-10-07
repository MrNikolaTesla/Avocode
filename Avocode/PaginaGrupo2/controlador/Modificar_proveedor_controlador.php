<?php

require_once("modelo/Modificar_proveedor_modelo.php");
session_start();
$_SESSION['mod_proveedor'] = $id = $_GET['id'];

$proveedor = new modificar_proveedor();

$proveedor_modificar = $proveedor->get_data();

require_once("vista/Modificar_proveedor_view.php");

?>