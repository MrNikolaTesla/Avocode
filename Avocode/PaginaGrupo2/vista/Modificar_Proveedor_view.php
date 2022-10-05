<?php foreach ($proveedor_modificar as $proveedor) { ?>
<form class="col-4" method="POST">
                <h3 class="text-center">Modificacion de Proveedores</h3>
                <?php require_once("../controlador/ControladorModificarProveedor.php"); ?>
                <div class="mb-3">
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $proveedor['id_proveedor'] ?>" readonly>
                </div>
                <div class="mb-3">
                        <label class="form-label">Nombre/s y Apellido/s</label>
                        <input type="text" class="form-control" name="nombre_apellido" value="<?php echo $proveedor['nombre_apellido'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Empresa</label>
                        <input type="text" class="form-control" name="empresa" value="<?php echo $proveedor['empresa'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Productos</label>
                        <input type="text" class="form-control" name="productos" value="<?php echo $proveedor['productos'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" value="<?php echo $proveedor['telefono'] ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar!</button>
                <p>
                        <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
</form>
<?php } ?>