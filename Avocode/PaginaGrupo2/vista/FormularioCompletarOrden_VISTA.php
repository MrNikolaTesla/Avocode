<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Completar Orden</title>
</head>

<body>
    <a href="PAGINA_CartillaVirtual.php" class="button-2-Pero_margin" style="color:white; text-decoration:none;">Regresar a la cartilla</a>
    <h3> Seleccione su tipo de orden: </h3>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=local"><button class="button-2" style="color:white;">Local</button></a>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=delivery"><button class="button-2" style="color:white;">Delivery</button></a>
    <a href="controlador/Controlador_Generar_Formulario_Orden.php?tipo=takeaway"> <button class="button-2" style="color:white;">Take Away</button> </a><br>
    <?php require_once("vista/Formulario_TipoORDEN.php"); ?>
</body>

</html>