<?php

require_once("modelo/Reserva.php");

$nom_reserva = new Reserva();

$empleado = $_SESSION['empleado_reserva'];

$resultado = $nom_reserva->nombre_empleado($empleado);

foreach($resultado as $result){
$_SESSION['empleado_reserva'] = $result;
}
?>