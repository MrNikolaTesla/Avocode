<?php 
session_start();
require_once("../modelo/Orden.php");
    $cancelar_orden = new Orden();
    if(isset($_SESSION['id_orden_actual'])){
        $orden_fuera = $_SESSION['id_orden_actual'];
        $cancelar_orden->eliminar_orden_incompleta($orden_fuera);
    }
    
header("Location: ../index.php");
?>