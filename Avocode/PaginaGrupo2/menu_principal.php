<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_admin.css">
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_empleado.css">
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_cliente.css">
	<link rel="stylesheet" type="text/css" href="assets/style_menu_principal.css">
</head>

<body>

<div>
    <?php require_once("controlador/MenuPrincipal_VerificacionPermisos.php"); ?>
</div>

<div>
    <?php require_once("controlador/Controlador_PerfilUsuario.php"); ?>
</div>

<div>
<?php require_once("vista/mensaje_perfil.php"); ?>
</div>

</body>

</html>