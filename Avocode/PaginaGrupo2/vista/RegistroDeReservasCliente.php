<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Reserva (Cliente)</title>
</head>

<body>
        <form class="form-flex" method="POST">
                <h3 class="text-center2">Formulario de Reserva :</h3>
                <?php require_once("controlador/ControladorRegistroReservaCliente.php"); ?>
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
                <button type="submit" class="button-2" name="boton_registro" value="enviar">Completar</button>
        </form>
</body>

</html>