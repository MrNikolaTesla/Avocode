<?php

require_once("../modelo/Modificar_producto_modelo.php");
session_start();
$_SESSION['mod_producto'] = $id = $_GET['id_producto'];

$productos = new modificar_producto();

$producto_modificar = $productos->get_data();

require_once("../vista/Modificar_producto_view.php");

?>