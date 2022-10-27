<?php
require_once("modelo/Orden.php");
$orden = new Orden();
if (!empty($_POST["completar"])) {
    if($_SESSION['tipo_orden'] == "local"){
        if (!empty($_POST["num_mesa"])) {

        $id_orden = $_SESSION['id_orden_actual'];
        $mesa = $_POST["num_mesa"];
        $tipo_orden = "Local";
        $observacion = $_POST["observacion"];
        $estado_orden = "Pendiente";

        $resultado = $orden->update_orden_local($id_orden, $mesa, $tipo_orden, $observacion, $estado_orden);

        if($resultado){
            require_once("modelo/Mesa.php");
            $mesa_a_ocupar = new Mesa();
            $mesa_a_ocupar->ocupar_mesa($mesa);
            $_SESSION['completando_orden'] = "false";
            require_once("Controlador_CompletarOrden.php");
        }else{
            echo "Algo ha fallado, intentelo de nuevo mas tarde.";
        }
    }
}else if($_SESSION['tipo_orden'] == "delivery"){
    if (!empty($_POST["direccion"])) {

        $id_orden = $_SESSION['id_orden_actual'];
        $direccion = $_POST["direccion"];
        $tipo_orden = "Delivery";
        $observacion = $_POST["observacion"];
        $estado_orden = "Pendiente";

        $resultado = $orden->update_orden_delivery($id_orden, $direccion, $tipo_orden, $observacion, $estado_orden);

        if($resultado){
            $_SESSION['completando_orden'] = "false";
            require_once("Controlador_CompletarOrden.php");

        }else{
            echo "Algo ha fallado, intentelo de nuevo mas tarde.";
        }
    }
}else if($_SESSION['tipo_orden'] == "takeaway"){
    if (!empty($_POST["hora"]) && !empty($_POST["fecha"])) {

        $id_orden = $_SESSION['id_orden_actual'];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $tipo_orden = "Take Away";
        $observacion = $_POST["observacion"];
        $estado_orden = "Pendiente";

        $resultado = $orden->update_orden_takeaway($id_orden, $hora, $fecha, $tipo_orden, $observacion, $estado_orden);

        if($resultado){
            $_SESSION['completando_orden'] = "false";
            require_once("Controlador_CompletarOrden.php");
        }else{
            echo "Algo ha fallado, intentelo de nuevo mas tarde.";
        }
    }
}
}

?>