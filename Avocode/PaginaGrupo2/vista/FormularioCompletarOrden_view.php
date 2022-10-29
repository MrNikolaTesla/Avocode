<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Completar Orden</title>
</head>

<body>
    <a href="PAGINA_CartillaVirtual.php" class="button-2-Pero_margin" style="color:white; text-decoration:none;">Regresar a la cartilla</a>
    <h3> Seleccione su tipo de orden : </h3>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=local" class="button-5" style="color:white;">Local</a>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=delivery" class="button-5" style="color:white;">Delivery</a>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=takeaway" class="button-5" style="color:white;">Take Away</a><br>
    <?php require_once("vista/TipoOrden_Formulario.php"); ?>
</body>

</html>