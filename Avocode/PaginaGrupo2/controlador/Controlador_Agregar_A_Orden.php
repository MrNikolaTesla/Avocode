<?php
require_once("modelo/Orden.php");
$orden = new Orden();

if (!empty($_POST["agregar_a_orden"])) {

    if (!empty($_POST['cantidad_producto'])) {

        $id_cliente = $_SESSION['id'];
        $id_producto = $_POST["id_producto"];
        $cantidad_producto = $_POST['cantidad_producto'];

        if (!isset($_SESSION['orden_iniciada']) || $_SESSION['orden_iniciada'] != "true") {
            $inicio_orden = $orden->creando_orden($id_cliente);
            //Codigo para llevarme el mayor id de orden
            $id_orden = $_SESSION['id_orden_actual'];
        } else {
            $id_orden = $_SESSION['id_orden_actual'];
        }

        $resultado = $orden->crear_fila_orden($id_orden, $id_producto, $cantidad_producto);
    }
}
?>