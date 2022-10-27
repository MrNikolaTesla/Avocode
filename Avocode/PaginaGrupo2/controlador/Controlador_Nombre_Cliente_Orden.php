<?php

require_once("modelo/Orden.php");

$nom_orden = new Orden();
if($_SESSION['cliente_orden'] != null){
    $cliente = $_SESSION['cliente_orden'];

    $resultado = $nom_orden->nombre_cliente($cliente);

    foreach($resultado as $result){
    $_SESSION['cliente_orden'] = $result;
    }
}
?>