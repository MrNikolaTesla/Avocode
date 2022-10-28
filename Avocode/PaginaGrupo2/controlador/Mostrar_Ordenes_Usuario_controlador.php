<?php
session_start();
require_once("modelo/Orden.php");

$orden = new Orden();

$id = $_SESSION['id'];

$matrizOrden = $orden->listar_ordenes_usuario($id);

if($matrizOrden){
    require_once("vista/Orden_DeUsuario_view.php");
    }else{
        ?><div class="no_hay_registros"><?php echo "No cuentas con ordenes en el sistema.";?></div><?php
}

?>