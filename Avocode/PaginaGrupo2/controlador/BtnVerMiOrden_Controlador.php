<?php session_start();
if (isset($_SESSION['id_orden_actual'])) {
?>
    <div class="centrado">
        <a href="#orden"><button class="button-1-cartilla" style="text-decoration:none" color="white" role="button">Ver mi Orden</button></a>
    </div><?php
        } ?>