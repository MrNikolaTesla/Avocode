<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Usuarios</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/styles2.css">

</head>

<body>
        <div class="container-fluid cont-pers">
                <!-- No se cual es esta class porque es del boostrap -->
                <!-- INICIO FORMULARIO ALTA -->
                <form class="col-4" method="POST">
                        <h3 class="text-center2">Registro de Usuarios</h3>
                        <?php require_once("../vista/mensaje_gestor.php"); ?>
                        <?php require_once("../controlador/ControladorRegistroUsuario.php"); ?>
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
                        <button type="submit" class="btn btn-primary" name="boton_registro" value="enviar">Enviar</button>
                </form>

                <!-- FIN FORMULARIO ALTA -->

                <div class="col-8 ">
                        <!-- No se cual es esta class porque es del boostrap -->
                        <!-- INICIO TABLA LISTAR -->
                        <?php require_once("../controlador/Usuario_controlador.php"); ?>
                        <!-- FIN TABLA LISTAR -->
                        <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                        <a class="button1" href="menu_principal.php">Volver</a>

                </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>