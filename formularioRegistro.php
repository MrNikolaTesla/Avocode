<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario Registro</title>
</head>

<body>
    <?php include("conexionBD.php"); ?>
    <form method="POST" action="procesarRegistro.php">
        <section class="form-register">
            <h4>Formulario de Registro</h4>
                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre"></input>
                <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido"></input>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
                <input class="controls" type="password" name="passwordRegistro1" id="password" placeholder="Ingrese su Contraseña"></input>
                <input class="controls" type="password" name="passwordRegistro2" id="password" placeholder="Ingrese su Contraseña"></input>
                <p>Estoy de acuerdo con <a href="terminos.php">Términos y Condiciones</a></p>
                <input class="buttons" type="submit" value="Registrar"></input>
                <p><a href="inicioSesion.php">Ya tengo Cuenta</a></p>
        </section>
    </form>

</body>

</html>

<!-- https://www.pexels.com/photo/man-standing-beside-commercial-espresso-machine-2067431/ -->