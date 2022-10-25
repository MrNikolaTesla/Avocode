<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Mesas</title>
</head>

<body>
        <?php require_once("vista/mensaje_gestor.php"); ?>
        <form class="form-flex" method="POST">
                <h3 class="text-center2">Ingreso de Mesas</h3>
                <div class="mb-3">
                        <?php require_once("controlador/ControladorRegistroMesa.php"); ?>
                        <label class="form-label">Cantidad de mesas (Cada 1 es una mesa extra)</label>
                        <p><input type="number" class="tablas-input" name="numero"></p>
                </div>

                <button type="submit" class="button-2" name="boton_registro" value="enviar">Agregar mesas</button>
        </form>
</body>

</html>