<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Formulario Registro</title>
</head>

<body>
    <form method="POST">
        <section class="form-register">
            <h4>Formulario de Registro</h4>
            <?php require_once("../controlador/ControladorRegistroCliente.php"); ?>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre"></input>
                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido"></input>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
                <input class="controls" type="password" name="passwordRegistro1" id="password" placeholder="Ingrese su Contraseña"></input>
                <input class="controls" type="password" name="passwordRegistro2" id="password" placeholder="Ingrese su Contraseña"></input>
                <p>Estoy de acuerdo con <a href="Terminos.php">Términos y Condiciones</a></p>
                <input class="buttons" type="submit" name="boton_registro" value="Registrar"></input>
                <p><a href="FormularioInicioSesion.php">Ya tengo Cuenta</a></p>
        </section>
    </form>

</body>

</html>

<!-- https://www.pexels.com/photo/man-standing-beside-commercial-espresso-machine-2067431/ -->
