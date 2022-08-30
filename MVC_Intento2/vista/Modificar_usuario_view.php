<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=devide-width, initial-scale=1.0">

<title>Index no tan loco</title>

</head>
<body>
<?php foreach($usuario_modificar as $usuario): ?>
    <form method="POST">
    <?php require_once("../controlador/ControladorModificarUsuario.php"); ?>
    <input name="id" value="<?php echo $usuario['id']?>" readonly>
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']?>" class="form-control" placeholder="Modificar Nombre">
    <input type="text" name="apellido" value="<?php echo $usuario['apellido']?>" class="form-control" placeholder="Modificar Apellido">
    <select id="cmbMake" name="tipo">
                        <option value="cliente">Cliente</option>
                        <option value="empleado">Empleado</option>
                        <option value="administrador">Administrador</option>
    </select>
    <input type="text" name="correo" value="<?php echo $usuario['correo']?>" class="form-control" placeholder="Modificar Correo">
    <input type="text" name="telefono" value="<?php echo $usuario['telefono']?>" class="form-control" placeholder="Modificar Telefono">
    <input type="text" name="direccion" value="<?php echo $usuario['direccion']?>" class="form-control" placeholder="Modificar Direccion">
    <input type="text" name="password" value="<?php echo $usuario['password']?>" class="form-control" placeholder="Modificar Contraseña">
    <button class="btn-success" name="modificar">Modificar!</button>
</form>
<?php endforeach; ?>
</body>

</html>