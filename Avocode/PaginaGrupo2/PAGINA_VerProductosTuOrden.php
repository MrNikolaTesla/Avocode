<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/styles2.css">
        <title>Productos de tu orden</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

<body class="body-2">
        <div class="container">
                <?php require_once("controlador/listar_productos_orden_usuario_controlador.php"); ?>
        </div>
</body>

</html>