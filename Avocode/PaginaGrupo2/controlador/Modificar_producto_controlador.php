<?php

require_once("modelo/Producto.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

$producto_mod = new Producto();

$producto_modificar = $producto_mod->get_data($id);

require_once("vista/MODIFICAR_Producto_VISTA.php");
}
?>