<?php

require_once("modelo/Orden.php");

$nom_orden = new Orden();
if($_SESSION['empleado_orden'] != null){
    $empleado = $_SESSION['empleado_orden'];

    $resultado = $nom_orden->nombre_empleado($empleado);
    
    foreach($resultado as $result){
    $_SESSION['empleado_orden'] = $result;
    }
}

?>