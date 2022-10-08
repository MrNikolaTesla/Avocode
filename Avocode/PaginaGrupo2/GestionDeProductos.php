<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link rel="stylesheet" href="assets/styles2.css">
        <title>Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        <div class="container-fluid cont-pers">
                <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO FORMULARIO ALTA -->
                <form class="form-flex" method="POST">
                        <h3 class="text-center2">Ingreso de Productos</h3>
                        <?php require_once("vista/mensaje_gestor.php"); ?>
                        <?php require_once("controlador/ControladorRegistroProducto.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <p><input type="text" class="tablas-input" name="nombre"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Precio</label>
                                <p><input type="text" class="tablas-input" name="precio"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Tipo</label>
                                <select id="cmbMake" name="tipo">
                                        <option value="hamburguesa">Hamburguesa</option>
                                        <option value="bebida">Bebida</option>
                                        <option value="acompanamiento">Acompañamiento</option>
                                </select>
                        </div>
                        <div><button type="submit" class="btn btn-primary" name="boton_añadir" value="enviar">Agregar</button>
                        </div>
        </div>
        </form>
        <div class="col-8 ">
                <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO TABLA LISTAR -->
                <?php require_once("controlador/Producto_controlador.php"); ?>
                <!-- FIN TABLA LISTAR -->
        </div>
        </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>