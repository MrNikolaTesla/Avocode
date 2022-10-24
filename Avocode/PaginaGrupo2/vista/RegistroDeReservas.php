<?php require_once("vista/mensaje_gestor.php"); ?>
<form class="form-flex" method="POST">
        <h3 class="text-center2">Registro de Reservas</h3>
        <?php require_once("controlador/ControladorRegistroReserva.php"); ?>
        <div class="mb-3">
                <label class="form-label">Numero de Mesa</label>
                <p><input type="number" class="tablas-input" name="num_mesa"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">Fecha</label>
                <p><input type="date" class="tablas-input" name="fecha"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">Hora</label>
                <p><input type="time" class="tablas-input" name="hora"></p>
        </div>
        <div class="mb-3">
                <label class="form-label">ID del Cliente</label>
                <p><input type="number" class="tablas-input" name="cliente_id"></p>
        </div>
        <button type="submit" class="button-2" name="boton_registro" value="enviar">Enviar</button>
</form>