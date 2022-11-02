<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(VISTA) Perfil de Usuario</title>
    <link rel="stylesheet" type="text/css" href="assets/perfil.css">

</head>

<body>
    <div class="fuera_del_perfil">
        <p class="izquierda"><?php echo $nombre ?> <?php echo $apellido ?></p>
        <p class="izquierda"><?php echo $correo ?></p>
        <img src="assets/iconos/icono-usuario.png" alt="Usuario" height="30" width="30" />
        <!--Simbolito de Usuario-->
        <a href="PAGINA_ModificarPerfil.php?id=<?php echo $id_perfil ?>"><img src="assets/iconos/icono-editar.png" alt="Editar" height="30" width="30"></img></a>
    </div>
</body>

</html>