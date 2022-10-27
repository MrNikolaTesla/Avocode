<?php
require_once("modelo/Orden.php");
$orden = new Orden();
if (!empty($_POST["completar"])) {
    if($_SESSION['tipo_orden'] == "local"){
        if (!empty($_POST["num_mesa"]) and !empty($_POST["observacion"])) {

        $id_orden = $_SESSION['id_orden_actual'];
        $mesa = $_POST["num_mesa"];
        $tipo_orden = $_SESSION['tipo_orden'];
        $observacion = $_POST["observacion"];
        $estado_orden = "Pendiente";

        $resultado = $orden->update_orden_local($id_orden, $mesa, $tipo_orden, $observacion, $estado_orden);

        if($resultado){
            require_once("Controlador_CompletarOrden.php");
        }else{
            echo "LOL";
        }
    }
}else if($_SESSION['tipo_orden'] == "delivery"){
}
}

?>