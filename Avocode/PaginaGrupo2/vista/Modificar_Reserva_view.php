<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion de Reserva</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Recursos Misceláneos (Bootstrap CSS, Tipografías, CSS variado) -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
        <?php foreach ($reserva_modificar as $reserva) : ?>
                <form class="col-4" method="POST">
                        <h3 class="text-center">Modificacion de Reservas</h3>
                        <?php require_once("controlador/MODIFICAR_GESTION_Reserva_CONTROLADOR.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Id - Inalterable</label>
                                <input type="number" class="form-control" name="id" value="<?php echo $reserva['id_reserva'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Numero de Mesa</label>
                                <input type="number" class="form-control" name="num_mesa" value="<?php echo $reserva['mesa'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Fecha</label>
                                <input type="text" class="form-control" name="fecha" value="<?php echo $reserva['fecha'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Hora</label>
                                <input type="text" class="form-control" name="hora" value="<?php echo $reserva['hora'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Cliente (Que realizo la reserva)</label>
                                <!--Aca tendria que haber una funcion para buscar el nombre del empleado y ponerlo a la izquierda de la ID-->
                                <input type="text" class="form-control" name="cliente_id" value="<?php echo $reserva['cliente'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Empleado (Que realizo la reserva)</label>
                                <!--Lo mismo aca-->
                                <input type="text" class="form-control" name="empleado_id" value="<?php echo $reserva['empleado'] ?>">
                        </div>
                        <a href="PAGINA_GestionReservas.php" class="button-2" style="color:white; text-decoration:none;">Regresar al Listado</a>
                        <button type="submit" class="button-3" name="modificacion" value="enviar">Modificar!</button>
                </form>
        <?php endforeach; ?>
</body>

</html>