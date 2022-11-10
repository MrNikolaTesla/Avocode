<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Orden</title>
</head>

<body>
    <div class="div-menu">
        <a href="PAGINA_CartillaVirtual.php" class="button-2-Pero_margin" style="color:white; text-decoration:none;">Regresar a la cartilla</a>
        <h3> Seleccione su tipo de orden: </h3>
        <a href="controlador/ORDEN_GenerarFormulario_CONTROLADOR.php?tipo=local"><button class="button-2" style="color:white;">Local</button></a>
        <a href="controlador/ORDEN_GenerarFormulario_CONTROLADOR.php?tipo=delivery"><button class="button-2" style="color:white;">Delivery</button></a>
        <a href="controlador/ORDEN_GenerarFormulario_CONTROLADOR.php?tipo=takeaway"> <button class="button-2" style="color:white;">Take Away</button> </a><br>
        <?php require_once("vista/Formulario_TipoORDEN.php"); ?>
        <div>
</body>

</html>