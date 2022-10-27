<?php

require_once("modelo/Mesa.php");

$mesas = new Mesa();

$matrizMesa = $mesas->listar_mesas_libres();

if($matrizMesa){
    require_once("vista/MesasLibres_view.php");
    }else{
        ?><div class="no_hay_registros"><?php echo "No hay mesas registradas en el sistema";?></div><?php
}

?>