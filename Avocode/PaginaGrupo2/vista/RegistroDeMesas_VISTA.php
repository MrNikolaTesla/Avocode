<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles2.css">
        <title>Registro de Mesas</title>
        <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
        <?php require_once("vista/MENSAJE_Gestor_VISTA.php"); ?>
        <form class="form-flex" method="POST">
                <h3 class="text-center2">Ingreso de Mesas</h3>
                <div class="mb-3">
                        <?php require_once("controlador/REGISTRO_Mesa_CONTROLADOR.php"); ?>
                        <label class="form-label">Cantidad de mesas (Cada 1 es una mesa extra)</label>
                        <p><input type="number" class="tablas-input" name="numero"></p>
                </div>

                <button type="submit" class="button-2" name="boton_registro" value="enviar">Agregar mesas</button>
        </form>
</body>

</html>