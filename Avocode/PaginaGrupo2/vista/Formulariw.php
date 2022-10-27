<?php
session_start();
if (isset($_SESSION['completando_orden'])) {
        if ($_SESSION['tipo_orden'] == "local") {
?>

                <form class="col-5" method="POST">
                        <h3>Completar Datos de la Orden : Local</h3>
                        <?php require_once("controlador/ControladorCompletarOrden.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Numero de Mesa</label>
                                <input type="number" class="form-control" name="num_mesa">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Observaciones</label>
                                <input type="text" class="form-control" name="observacion">
                        </div>
                        <button type="submit" class="button-5" name="completar" value="enviar">Completar orden!</button>
                </form>
                <?php require("controlador/Controlador_MostrasMesas_Cliente.php"); ?>
<?php
        } else if ($_SESSION['tipo_orden_formulario'] == "delivery") {
                echo "delivery";
        } else if ($_SESSION['tipo_orden_formulario'] == "takeaway") {
                echo "takeaway";
        }
}
?>