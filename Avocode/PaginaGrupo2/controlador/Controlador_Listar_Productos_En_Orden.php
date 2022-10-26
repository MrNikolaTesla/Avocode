<?php 
session_start();
require_once("modelo/Orden.php");

$orden = new Orden();
if(isset($_SESSION['id_orden_actual'])){
$orden_cargada = $_SESSION['id_orden_actual'];//$_SESSION['id_orden_actual'];
$precio_total=0;
$matrizProdOrden = $orden->listar_productos_orden($orden_cargada);
//TODO ESTO TENDRIA QUE ESTAR EN OTRO LADO, TEMPORAL
foreach($matrizProdOrden as $fila){
}
foreach($matrizProdOrden as $fila){
    $id_detalle = $fila['id_detalle_orden'];
  $suma_prec_total = $orden->multi_del_precio($id_detalle);
  foreach($suma_prec_total as $suma){
$cantidad_sumar = $suma['total'];
  }
  $precio_total = $precio_total +$cantidad_sumar; 
}
echo $precio_total;
///////////////////////////////////////////////////////////////////
//Esto aca abajo seria la supuesta tabla, tendria que llevarme en SESSION el precio total
//require_once("vista/Productos_de_Orden.php");
}
?>