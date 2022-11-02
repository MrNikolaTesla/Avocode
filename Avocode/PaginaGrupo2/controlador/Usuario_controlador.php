<?php

require_once("modelo/Usuario.php");

$usuarios = new Usuario();

$matrizUsuario = $usuarios->listar_usuarios();

if ($matrizUsuario) {
    require_once("vista/Usuarios_VISTA.php");
} else {
?>
    <div class="no_hay_registros">
        <?php echo "No hay usuarios registrados en el sistema"; ?>
    </div>
<?php
}
?>