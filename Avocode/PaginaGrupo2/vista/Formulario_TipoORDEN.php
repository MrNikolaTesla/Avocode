<?php
session_start();
if (isset($_SESSION['completando_orden']) && $_SESSION['completando_orden'] == "true") {
        if ($_SESSION['tipo_orden'] == "local") {
?>
                <form class="col-5" method="POST">
                        <h3>Completar Datos de la Orden: Local</h3>
                        <?php require_once("controlador/ControladorProcesarOrden.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Numero de Mesa</label>
                                <input type="number" class="form-control" name="num_mesa">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Observaciones</label>
                                <input type="text" class="form-control" name="observacion">
                        </div>
                        <button type="submit" class="button-2" name="completar" value="enviar">Completar orden!</button>
                </form>
                <?php require("controlador/Controlador_MostrarMesas_Libres.php"); ?>
        <?php
        } else if ($_SESSION['tipo_orden'] == "delivery") {
        ?>
                <form class="col-5" method="POST">
                        <h3>Completar Datos de la Orden: Delivery</h3>
                        <?php require_once("controlador/ControladorProcesarOrden.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Observaciones</label>
                                <input type="text" class="form-control" name="observacion">
                        </div>
                        <button type="submit" class="button-2" name="completar" value="enviar">Completar orden!</button>
                </form>
        <?php
        } else if ($_SESSION['tipo_orden'] == "takeaway") {
        ?>
                <form class="col-5" method="POST">
                        <h3>Completar Datos de la Orden: Take Away</h3>
                        <?php require_once("controlador/ControladorProcesarOrden.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="fecha">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Hora</label>
                                <input type="time" class="form-control" name="hora">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Observaciones</label>
                                <input type="text" class="form-control" name="observacion">
                        </div>
                        <button type="submit" class="button-2" name="completar" value="enviar">Completar orden!</button>
                </form>
<?php
        }
}
?>