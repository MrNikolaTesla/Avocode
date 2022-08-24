<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Inicio de Sesión</title>
    <style>
ul {
  list-style-type: none;
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #3F3328;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#vacioporahora_inicio">Inicio</a></li>
  <li><a href="#vacioporahora1">Algo1</a></li>
  <li><a href="#vacioporahora2">Algo2</a></li>
  <li style="float:right"><a href="vista/FormularioRegistroCliente.php">Registrarse</a></li>
  <li style="float:right"><a href="vista/FormularioInicioSesion.php">Iniciar Sesion</a></li>
</ul>
</body>
</html>
