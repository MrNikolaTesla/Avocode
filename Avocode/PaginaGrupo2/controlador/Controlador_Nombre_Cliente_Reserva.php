<?php

require_once("modelo/Reserva.php");

$nom_reserva = new Reserva();

$cliente = $_SESSION['cliente_reserva'];

$resultado = $nom_reserva->nombre_cliente($cliente);

foreach($resultado as $result){
$_SESSION['cliente_reserva'] = $result;
}
?>