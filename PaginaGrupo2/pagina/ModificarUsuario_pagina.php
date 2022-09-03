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

<div class="container-fluid row"> <!-- No se cual es esta class porque es del boostrap -->
        <?php require_once("../controlador/Modificar_usuario_controlador.php"); ?>
        </div>

        <form class="col-4" method="POST">
                <h3 class="text-center">Modificacion de Usuarios</h3>
                <?php require_once("../controlador/ControladorModificarUsuario.php"); ?>
                <div class="mb-3">
                    <label class="form-label">Id</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $usuario['id_usuario']?>" readonly>
                   </div>
                <div class="mb-3">
                    <label class="form-label">Nombre/s</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre']?>">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Apellido/s</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $usuario['apellido']?>">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" value="<?php echo $usuario['correo']?>">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="text" class="form-control" name="password" value="<?php echo $usuario['password']?>">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $usuario['direccion']?>">
                   </div>
                   <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="telefono" value="<?php echo $usuario['telefono']?>">
                   </div>


                <div class="mb-3">
                <label class="form-label">Tipo (Anteriormente: <?php echo $usuario['tipo']?>)</label>
                <select name="format" id="format">
                <option selected disabled>Elija un usuario</option>
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
                <option value="administrador">Administrador</option>
                </select>
                </div>



                   <div class="mb-3">
                    <label class="form-label">Tipo (Anteriormente: <?php echo $usuario['tipo']?>)</label>
                    <select id="cmbMake" name="tipo">
                        <option value="cliente">Cliente</option>
                        <option value="empleado">Empleado</option>
                        <option value="administrador">Administrador</option>
                    </select>
                   </div>
                  <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar!</button>
                  <p>
                  <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
</form>
<button><a href="GestionDeUsuarios.php">Volver</a></button>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>