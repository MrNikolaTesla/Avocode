<?php
require_once("../modelo/Orden.php");
$orden = new Orden();
session_start();

if(isset($_SESSION['id_orden_actual'])){
    $orden_fuera = $_SESSION['id_orden_actual'];
    $orden->eliminar_orden_incompleta($orden_fuera);
}
session_unset();
session_destroy();

header("Location: ../index.php");

?>