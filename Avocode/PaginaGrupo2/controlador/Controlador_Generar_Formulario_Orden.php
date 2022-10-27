<?php
session_start();
if(isset($_GET['tipo'])){

$tipo_de_orden = $_GET['tipo'];

if($tipo_de_orden == "local"){
$_SESSION['tipo_orden'] = "local";
}else if($tipo_de_orden == "delivery"){
$_SESSION['tipo_orden'] = "delivery";
}else if($tipo_de_orden == "takeaway"){
$_SESSION['tipo_orden'] = "takeaway";
}
$_SESSION['completando_orden'] = "true";

header("Location: ../PAGINA_ContinuarOrden.php");
}

?>