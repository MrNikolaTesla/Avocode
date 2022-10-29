<?php 

require_once("modelo/Orden.php");

$orden = new Orden();
if(isset($_SESSION['id_orden_actual'])){
$orden_cargada = $_SESSION['id_orden_actual'];

$matrizProdOrden = $orden->listar_productos_orden($orden_cargada);

if($matrizProdOrden){
require_once("vista/Productos_de_Orden_view.php");
}else{
  echo "<h3 class='centrado'>Tu Orden :</h3><br>
  <div class='centrado_y_alejado_bottom'>No cuentas con productos dentro de tu orden.</div>"; ?>
   <div class="centrado"><a class="button-3" href="controlador/Controlador_CancelarOrden.php" style="color:white;">Cancelar Orden</a></div>
   <?php
}
}
?>