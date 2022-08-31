<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Productos</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
        <div class="container-fluid row"> <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO FORMULARIO ALTA -->
                <form class="col-4" method="POST">
                  <h3 class="text-center">Agregar Producto</h3>
                  <?php require_once("mensaje_gestor_producto.php"); ?>
                  <?php require_once("../controlador/ControladorRegistroProducto.php"); ?>
                  <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio">
                   </div>
                    <label class="form-label">Tipo</label>
                    <select id="cmbMake" name="tipo" >
                        <option value="hamburguesa">Hamburguesa</option>
                        <option value="bebida">Bebida</option>
                        <option value="acompanamiento">Acompañamiento</option>
                    </select>
                   </div>
                  <button type="submit" class="btn btn-primary" name="boton_añadir" value="enviar">Agregar</button>
                  <p>
                  <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
                </form>
                <button><a href="menu_principal.php">Volver</a></button>
                <!-- FIN FORMULARIO ALTA -->
        
                <div class="col-8 "> <!-- No se cual es esta class porque es del boostrap -->
                        <!-- INICIO TABLA LISTAR -->
                        <?php require_once("../controlador/Producto_controlador.php"); ?>
                        <!-- FIN TABLA LISTAR -->
                </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>