<?php

require_once("../modelo/Modificar_producto_modelo.php");
if(isset($_GET['id'])){

    $id = $_GET['id'];

$productos = new modificar_producto();

$producto_modificar = $productos->get_data($id);

require_once("../vista/Modificar_producto_view.php");
}
?>