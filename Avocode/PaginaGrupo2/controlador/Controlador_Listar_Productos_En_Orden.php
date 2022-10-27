<?php 

require_once("modelo/Orden.php");

$orden = new Orden();
if(isset($_SESSION['id_orden_actual'])){
$orden_cargada = $_SESSION['id_orden_actual'];

$matrizProdOrden = $orden->listar_productos_orden($orden_cargada);

if($matrizProdOrden){
require_once("vista/Productos_de_Orden.php");
}else{
  echo "No cuentas con productos dentro de tu orden.";
}
}
?>