<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="../assets/styles2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

        <div class="container-fluid row">
                <!-- No se cual es esta class porque es del boostrap -->
                <?php require_once("../controlador/Modificar_proveedor_controlador.php"); ?>
        </div>

        <form class="col-4" method="POST">
                <h3 class="text-center">Modificacion de Proveedores</h3>
                <?php require_once("../controlador/ControladorModificarProveedor.php"); ?>
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
                        <label class="form-label">productos</label>
                        <input type="text" class="form-control" name="productos" value="<?php echo $proveedor['productos'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar!</button>
                <p>
                        <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
        </form>
        <button><a href="GestionDeProveedor.php">Volver</a></button>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>