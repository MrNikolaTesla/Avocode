<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Inicio de Sesion</title>
</head>

<body>
    <form method="POST">
        <section class="form-register">
            <h4>Inicio de Sesion</h4>
            <?php require_once("../controlador/ControladorInicioSesion.php"); ?>
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
                <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña"></input>
                <input class="buttons" type="submit" name="boton_inicio" value="Registrar"></input>
        </section>
    </form>

</body>

</html>

<!-- https://www.pexels.com/photo/man-standing-beside-commercial-espresso-machine-2067431/ -->
