<?php require_once("vista/mensaje_gestor.php"); ?>
<form class="form-flex" method="POST">
        <h3 class="text-center2">Ingreso de Mesas</h3>
        <?php require_once("controlador/ControladorRegistroMesa.php"); ?>
        <p><input type="number" class="tablas-input" name="numero"></p>
        <button type="submit" class="button-2" name="boton_registro" value="enviar">Agregar mesas</button>
</form>