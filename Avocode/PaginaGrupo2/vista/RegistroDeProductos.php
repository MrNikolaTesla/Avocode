<form class="form-flex" method="POST" enctype="multipart/form-data">
                        <h3 class="text-center2">Ingreso de Productos</h3>
                        <?php require_once("vista/mensaje_gestor.php"); ?>
                        <?php require_once("controlador/ControladorRegistroProducto.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Nombre</label>
                                <p><input type="text" class="tablas-input" name="nombre"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Precio</label>
                                <p><input type="number" class="tablas-input" name="precio"></p>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Tipo</label>
                                <select id="cmbMake" name="tipo">
                                        <option value="hamburguesa">Hamburguesa</option>
                                        <option value="bebida">Bebida</option>
                                        <option value="acompanamiento">Acompañamiento</option>
                                </select>
                        </div>
                        <div class="mb-3">
                        <input type="file" accept="image/*" name="imagen"/>
                        </div>
                        <button type="submit" class="button-2" name="boton_añadir" value="enviar">Agregar</button>
                </form>