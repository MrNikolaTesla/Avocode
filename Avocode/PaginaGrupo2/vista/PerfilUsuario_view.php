<link rel="stylesheet" type="text/css" href="assets/perfil.css">

<div class="fuera_del_perfil">
    <p class="izquierda"><?php echo $nombre ?> <?php echo $apellido ?></p>
    <p class="izquierda"><?php echo $correo ?></p>
    <img src="https://cdn-icons-png.flaticon.com/512/74/74472.png" alt="Usuario" height="30" width="30" />
    <!--Simbolito de Usuario-->
    <a href="ModificarPerfil_pagina.php?id=<?php echo $id_perfil ?>"><img src="https://cdn-icons-png.flaticon.com/512/45/45416.png" alt="Editar" height="30" width="30"></img></a>
</div>