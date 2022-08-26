<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
        <div class="container-fluid row"> <!-- No se cual es esta class porque es del boostrap -->
                
                <!-- INICIO FORMULARIO ALTA -->
                <form class="col-4" method="POST">
                  <h3 class="text-center">Registro de Usuarios</h3>
                  <!-- Aca iria para insertar un usuario nuevo :D | php require_once("../controlador/.php"); -->
                  <div class="mb-3">
                    <label class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="nombre">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Apellido de la persona</label>
                    <input type="text" class="form-control" name="apellido">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Edad de la persona</label>
                    <input type="text" class="form-control" name="edad">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Nota de la persona</label>
                    <input type="text" class="form-control" name="nota">
                   </div>
                  <button type="submit" class="btn btn-primary" name="btnenviar" value="enviar">Enviar</button>
                </form>
                <!-- FIN FORMULARIO ALTA -->
        
                <div class="col-8 "> <!-- No se cual es esta class porque es del boostrap -->
                        <!-- INICIO TABLA LISTAR -->
                        <?php require_once("controlador/Usuario_controlador.php"); ?>
                        <!-- FIN TABLA LISTAR -->
                </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>