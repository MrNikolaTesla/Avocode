<?php
session_start();
require_once("../modelo/Orden.php");
    $orden = new Orden();
    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $orden_cargada = $_SESSION['id_orden_actual'];
        $estado = $orden->eliminar_linea_orden($orden_cargada,$id);

if($estado==1) {
    header("Location: ../PAGINA_CartillaVirtual.php");
}else{
    header("Location: ../PAGINA_CartillaVirtual.php");
}

}else{
    header("Location: ../PAGINA_CartillaVirtual.php");
}

?>