<?php session_start();
if (isset($_SESSION['id_orden_actual'])) {
?>
    <div class="div-botones">
        <a href="index.php"><button class="button-1-cartilla">Regresar</button></a>
        <a href="#orden"><button class="button-1-cartilla">Ver mi Orden</button></a>
    </div>

<?php
} ?>