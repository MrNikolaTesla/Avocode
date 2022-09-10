<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Proveedores</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/styles2.css">

</head>

<body>
        <div class="container-fluid">
                <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO FORMULARIO ALTA -->
                <form class="col-4" method="POST">
                        <h3 class="text-center2">Registro de Proveedores</h3>
                        <?php require_once("../vista/mensaje_gestor_proveedor.php"); ?>
                        <?php require_once("../controlador/ControladorRegistroProveedor.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s y Apellido/s</label>
                                <input type="text" class="tablas-input" name="nombre_apellido">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Empresa</label>
                                <input type="text" class="tablas-input" name="empresa">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Productos</label>
                                <input type="text" class="tablas-input" name="productos">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="tablas-input" name="telefono">
                        </div>
                        <button type="submit" class="btn btn-primary" name="boton_registro" value="enviar">Enviar</button>
                        <p>
                                <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                        </p>
                </form>

                <button class="button1"><a href="menu_principal.php">Volver</a></button>
                <!-- FIN FORMULARIO ALTA -->

                <div class="col-8 ">
                        <!-- No se cual es esta class porque es del boostrap -->
                        <!-- INICIO TABLA LISTAR -->
                        <?php require_once("../controlador/Proveedor_controlador.php"); ?>
                        <!-- FIN TABLA LISTAR -->
                </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>