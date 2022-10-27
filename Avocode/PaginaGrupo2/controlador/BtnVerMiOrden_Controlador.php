<?php session_start();
if(isset($_SESSION['id_orden_actual'])){
   ?> <br><a href="#orden">Ver mi Orden</a><br> <?php
}?>