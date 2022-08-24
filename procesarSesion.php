<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
  <li style="float:right"><a href="#vacioporahora3">Algo3</a></li>
</ul>
    <?php include("conexionBD.php");?>
<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$correo_captado=null;
$contraseña_captada=null;
$habemus_correo=null;
$habemus_contraseña=null;

if($correo!=null && $contraseña!=null){
    $query_correo = "SELECT * FROM datos WHERE correo = '$correo'";
    $correo_captado = mysqli_query($connection, $query_correo);
    $habemus_correo = mysqli_fetch_array($correo_captado);
    if($habemus_correo){
        $id = $habemus_correo['id'];
        $nombre = $habemus_correo['nombre'];
        $apellidos = $habemus_correo['apellido'];
        }
    $query_contraseña = "SELECT * FROM datos WHERE password = '$contraseña' AND id = '$id'";
    $contraseña_captado = mysqli_query($connection, $query_contraseña);
    $habemus_contraseña = mysqli_num_rows($contraseña_captado);
    }else{
        header("Location: inicioFallido.php");
    }
?>

    <section class="form-register">
    <?php

    if($habemus_correo){
    ?><h4>Sesión iniciada con exito!</h4><?php
    }else{
        header("Location: inicioFallido.php");
    }
    if(!$habemus_contraseña){
    header("Location: inicioFallido.php");
    }
    print "Bienvenido $nombre $apellidos!";
    ?>
    <br>Funcionanding.
    </section>
</body>
</html>