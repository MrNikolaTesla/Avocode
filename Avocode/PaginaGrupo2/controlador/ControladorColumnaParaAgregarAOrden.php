<?php 

if (isset($_SESSION['sesion_iniciada']) && $_SESSION['sesion_iniciada'] == "true"){
    require_once("vista/ColumnaParaAgregarAOrden_view.php");
}else{

}

?>