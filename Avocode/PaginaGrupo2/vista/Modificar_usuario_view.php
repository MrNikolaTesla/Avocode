<?php foreach ($usuario_modificar as $usuario) : ?>
<form class="col-4" method="POST">
                <h3 class="text-center">Modificacion de Usuarios</h3>
                <?php require_once("controlador/ControladorModificarUsuario.php"); ?>
                <div class="mb-3">
                        <label class="form-label">Id</label>
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
                <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar!</button>
                <p>
                        <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
</form>
<?php endforeach; ?>