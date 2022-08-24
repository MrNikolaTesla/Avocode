<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Inicio de Sesión</title>
</head>

<body>
  <form method="POST" action="procesarSesion.php">
    <section class="form-register">
      <h4>Inicio de sesión</h4>
      <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"></input>
      <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña"></input>
      <input class="buttons" type="submit" value="Iniciar sesión"></input>
      <p><a href="recuperarPassword-1.php">Olvidé la contraseña</a></p>
      <p><a href="formularioRegistro.php">Registrar cuenta</a></p>
    </section>
  </form>
</body>

</html>