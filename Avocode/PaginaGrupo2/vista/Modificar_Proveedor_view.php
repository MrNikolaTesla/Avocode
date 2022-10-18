<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion de Proveedor</title>
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
        <?php foreach ($proveedor_modificar as $proveedor) : ?>
                <form class="col-4" method="POST">
                        <h3 class="text-center">Modificacion de Proveedores</h3>
                        <?php require_once("controlador/ControladorModificarProveedor.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $proveedor['id_proveedor'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s y Apellido/s</label>
                                <input type="text" class="form-control" name="nombre_apellido" value="<?php echo $proveedor['nombre_apellido'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Empresa</label>
                                <input type="text" class="form-control" name="empresa" value="<?php echo $proveedor['empresa'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Productos</label>
                                <input type="text" class="form-control" name="productos" value="<?php echo $proveedor['productos'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" value="<?php echo $proveedor['telefono'] ?>">
                                <button type="submit" class="button-2"><a href="PAGINA_GestionProveedores.php.php" style="color:white;">Regresar al Listado</a></button>
                        <button type="submit" class="button-3" name="modificacion" value="enviar">Modificar!</button>
                        </div>
                </form>
        <?php endforeach; ?>
</body>

</html>