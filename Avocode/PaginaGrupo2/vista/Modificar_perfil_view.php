<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modificacion de Usuario</title>
        <link rel="stylesheet" href="assets/styles2.css">

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
        <?php if($id_a_Modificar == $id_perfil){ ?>
                <form class="col-4" method="POST">
                        <h3 class="text-center">Informacion de Perfil</h3>
                        <?php require_once("controlador/ControladorModificarPerfil.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Id - Inalterable</label>
                                <input type="text" class="form-control" name="id" value="<?php echo $id_perfil ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s - Inalterable</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Apellido/s - Inalterable</label>
                                <input type="text" class="form-control" name="apellido" value="<?php echo $apellido ?>" readonly>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" value="<?php echo $correo ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Direccion</label>
                                <input type="text" class="form-control" name="direccion" value="<?php echo $direccion ?>">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="number" class="form-control" name="telefono" value="<?php echo $telefono ?>">
                        </div>
                        <a href="menu_principal.php" class="button-2" style="color:white; text-decoration:none;">Regresar</a>
                        <button type="submit" class="button-3" name="modificacion" value="enviar">Modificar</button>
                        <a href="controlador/EliminarPerfil_controlador.php?id=<?php echo $id_perfil ?>" style="color:white;"><button type="submit" class="button-4" style="color:white;">Eliminar cuenta</a></button>
                </form>
        <?php }else{  ?>
                <div class="centrado">No estas modificando tu propio perfil...</div>
                <a href="menu_principal.php" class="button-2" style="color:white; text-decoration:none;">Regresar</a>
        <?php } ?>

</body>

</html>