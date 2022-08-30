<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=devide-width, initial-scale=1.0">

<title>Modificar Usuario</title>

</head>
<body>
    <form method="POST">
    <h3 class="text-center">Modificacion de Usuarios</h3>
    <?php require_once("../controlador/ControladorModificarUsuario.php"); ?>
    <?php foreach($usuario_modificar as $usuario): ?>
    <input type="text" name="id" value="<?php echo $usuario['id']?>" readonly>
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']?>" class="form-control">
    <input type="text" name="apellido" value="<?php echo $usuario['apellido']?>" class="form-control">
    <select id="cmbMake" name="tipo">
                        <option value="cliente">Cliente</option>
                        <option value="empleado">Empleado</option>
                        <option value="administrador">Administrador</option>
    </select>
    <input type="email" name="correo" value="<?php echo $usuario['correo']?>" class="form-control">
    <input type="number" name="telefono" value="<?php echo $usuario['telefono']?>" class="form-control">
    <input type="text" name="direccion" value="<?php echo $usuario['direccion']?>" class="form-control">
    <input type="text" name="password" value="<?php echo $usuario['password']?>" class="form-control">    
    <button type="submit" class="btn-success" name="modificar" value="modificacion">Modificar!</button>
    <?php endforeach; ?>
</form>

<button><a href="GestionDeUsuarios.php">Volver</a></button>
</body>

</html>