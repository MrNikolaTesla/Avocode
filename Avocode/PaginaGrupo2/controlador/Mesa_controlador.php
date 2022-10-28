<?php

require_once("modelo/Mesa.php");

$mesas = new Mesa();

$matrizMesa = $mesas->listar_mesas();

if($matrizMesa){
    require_once("vista/Mesa_view.php");
    }else{
        ?><div><div class="no_hay_registros"><?php echo "No hay mesas registradas en el sistema";?></div></div><?php
}

?>