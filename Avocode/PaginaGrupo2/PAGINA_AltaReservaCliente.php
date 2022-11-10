<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles2.css">
        <title>Crear reserva</title>
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
        <?php require_once("vista/MENSAJE_Gestor_VISTA.php"); ?>
        <div class="container-fluid cont-pers">
                <!-- INICIO FORMULARIO ALTA -->
                <?php require_once("vista/RegistroDeReservas_CLIENTE_VISTA.php"); ?>
                <!-- FIN FORMULARIO ALTA -->
                <div class="col-8 ">
                        <!-- INICIO TABLA LISTAR -->
                        <div>
                                <?php require("controlador/Controlador_MostrasMesas_Libres_Reserva.php"); ?>
                        </div>
                        <!-- FIN TABLA LISTAR -->
                        <a href="index.php"><button class="button-2">Volver</button></a>
                </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>