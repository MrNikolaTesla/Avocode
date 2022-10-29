<!DOCTYPE html>
<html lang="es">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Usuario</title>
</head>

<body>
        <?php require_once("vista/mensaje_gestor.php"); ?>
        <form class="form-flex" method="POST">
                <h3 class="text-center2">Registro de Usuarios</h3>
                <?php require_once("controlador/ControladorRegistroUsuario.php"); ?>
                <div class="mb-3">
                        <label class="form-label">Nombre/s</label>
                        <p><input type="text" class="tablas-input" name="nombre"></p>
                </div>
                <div class="mb-3">
                        <label class="form-label">Apellido/s</label>
                        <p><input type="text" class="tablas-input" name="apellido"></p>
                </div>
                <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <p><input type="email" class="tablas-input" name="correo"></p>
                </div>
                <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <p><input type="text" class="tablas-input" name="password"></p>
                </div>
                <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <p><input maxlength="80" type="text" class="tablas-input" name="direccion"></p> <!-- EL MÁXIMO DE DIRECCIÓN (maxlength) ES 80 CARACTERES, EL MISMO QUE LA BASE DE DATOS-->
                </div>
                <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <p><input type="number" class="tablas-input" name="telefono"></p>
                </div>
                <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <select id="cmbMake" name="tipo">
                                <option value="cliente">Cliente</option>
                                <option value="empleado">Empleado</option>
                                <option value="administrador">Administrador</option>
                        </select>
                </div>
                <button type="submit" class="button-2" name="boton_registro" value="enviar">Agregar</button>
        </form>
</body>

</html>