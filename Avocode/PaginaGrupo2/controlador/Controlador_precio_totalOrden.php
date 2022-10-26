<?php 

require_once("modelo/Orden.php");

$orden = new Orden();
//$orden_cargada = $_SESSION['id_orden_actual'];

$numero = 2;
$matrizPrecTotal = $orden->precio_total($numero);

require_once("vista/Precio_Total_view.php");

?>