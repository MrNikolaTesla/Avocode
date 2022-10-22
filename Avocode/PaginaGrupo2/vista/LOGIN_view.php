<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN VIEW</title>
</head>

<body>
    <form method="POST">
        <section class="form-register">
            <h4>Inicio de Sesion</h4>
            <?php require_once("controlador/ControladorInicioSesion.php"); ?>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
            <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña"></input>
            <input class="buttons" type="submit" name="boton_inicio" value="Iniciar Sesion"></input>
            <p><a href="FormularioRegistroCliente.php">Registrarse</a></p>
        </section>
    </form>
</body>

</html>