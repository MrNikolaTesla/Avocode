<form class="form-flex" method="POST">
                        <h3 class="text-center2">Registro de Proveedores</h3>
                        <?php require_once("controlador/ControladorRegistroProveedor.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s y Apellido/s</label>
                                <p><input type="text" class="tablas-input" name="nombre_apellido"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Empresa</label>
                                <p><input type="text" class="tablas-input" name="empresa"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Productos</label>
                                <p><input type="text" class="tablas-input" name="productos"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <p><input type="text" class="tablas-input" name="telefono"></p>
                        </div>
                        <button type="submit" class="button-2" name="boton_registro" value="enviar">Enviar</button>
                </form>