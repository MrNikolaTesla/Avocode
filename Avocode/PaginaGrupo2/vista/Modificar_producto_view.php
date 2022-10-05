<?php foreach ($producto_modificar as $producto) { ?>
<form class="col-4" method="POST">
                <h3 class="text-center">Modificacion de Productos</h3>
                <?php require_once("../controlador/ControladorModificarProducto.php"); ?>
                <div class="mb-3">
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $producto['id_articulo'] ?>" readonly>
                </div>
                <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" class="form-control" name="precio" value="<?php echo $producto['precio'] ?>">
                </div>
                <label class="form-label">Tipo (Anteriormente: <?php echo $producto['tipo'] ?>)</label>
                <select id="cmbMake" name="tipo">
                        <option value="hamburguesa">Hamburguesa</option>
                        <option value="bebida">Bebida</option>
                        <option value="acompanamiento">Acompañamiento</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar!</button>
                <p>
                        <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                </p>
</form>
<?php } ?>