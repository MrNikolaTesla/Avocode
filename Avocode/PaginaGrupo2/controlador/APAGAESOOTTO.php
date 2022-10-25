<?php 
session_start();

require_once("../modelo/Orden.php");
    $completar_orden = new Orden();

    $completar_orden->completar_orden();

header("Location: ../PAGINA_CartillaVirtual.php");
?>