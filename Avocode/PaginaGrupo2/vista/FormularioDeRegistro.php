<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <section class="form-register">
            <h4>Formulario de Registro</h4><br>
            <?php require_once("mensaje_registro.php"); ?>
            <?php require_once("controlador/ControladorRegistroCliente.php"); ?>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre"></input>
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido"></input>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
            <input class="controls" type="password" name="passwordRegistro1" id="password" placeholder="Ingrese su Contraseña"></input>
            <input class="controls" type="password" name="passwordRegistro2" id="password" placeholder="Ingrese su Contraseña"></input>
            <p>Estoy de acuerdo con <a href="Terminos.php">Términos y Condiciones</a></p>
            <input class="buttons" type="submit" name="boton_registro" value="Registrar"></input>
            <p><a href="FormularioInicioSesion.php">Ya tengo Cuenta</a></p>
            <p><a href="index.php">Volver al inicio</a></p>
        </section>
    </form>
</body>

</html>