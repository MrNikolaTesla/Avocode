<?php
if(!empty($_POST["busqueda"])){

$producto = $_POST["producto"];

require_once("modelo/Producto.php");

$productos = new Producto();

$matrizProducto = $productos->buscar_productos($producto);

require_once("vista/Productos_view.php");
}
?>