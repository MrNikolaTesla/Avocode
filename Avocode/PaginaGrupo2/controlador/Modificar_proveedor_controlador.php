<?php

require_once("modelo/Proveedor.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

$proveedor_mod = new Proveedor();

$proveedor_modificar = $proveedor_mod->get_data($id);

require_once("vista/Modificar_proveedor_view.php");
}
?>