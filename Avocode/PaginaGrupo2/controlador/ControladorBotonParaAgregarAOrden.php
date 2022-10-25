<?php 

if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true"){
require("vista/BotonesParaAgregarAOrden_view.php");
}else{

}

?>