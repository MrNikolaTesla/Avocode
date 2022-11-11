<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>(Botón) Agregar a Orden</title>
</head>

<body>
    <form method="POST" class="alinear_btn_producto">
        <?php require_once("controlador/Controlador_Agregar_A_Orden.php"); ?>
        <input type="number" min="1" name="cantidad_producto"></input>
        <input type="text" name="id_producto" value="<?php echo $producto['id_producto'] ?>" hidden></input>
        <button class="button-2" type="submit" name="agregar_a_orden" value="Agregar">+</button>
    </form>
</body>

</html>