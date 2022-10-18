<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion de Usuario</title>
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
        <?php foreach ($usuario_modificar as $usuario) : ?>
                <form class="col-4" method="POST">
                        <h3 class="text-center">Modificacion de Usuarios</h3>
                        <?php require_once("controlador/ControladorModificarUsuario.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Id - Inalterable</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $usuario['id_usuario'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Apellido/s</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo $usuario['apellido'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" value="<?php echo $usuario['correo'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion" value="<?php echo $usuario['direccion'] ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="number" class="form-control" name="telefono" value="<?php echo $usuario['telefono'] ?>">
                        </div>


                        <div class="mb-3">
                                <label class="form-label">Tipo (Anteriormente: <?php echo $usuario['tipo'] ?>)</label>
                                <select name="tipo" id="format">
                                        <option value="NoSelecciono" selected disabled hidden>Elija un usuario</option>
                                        <option value="cliente">Cliente</option>
                                        <option value="empleado">Empleado</option>
                                        <option value="administrador">Administrador</option>
                                </select>
                        </div>
                        <button type="submit" class="button-2"><a href="PAGINA_GestionUsuarios.php" style="color:white;">Regresar al Listado</a></button>
                        <button type="submit" class="button-3" name="modificacion" value="enviar">Modificar</button>
                </form>
        <?php endforeach; ?>

</body>

</html>