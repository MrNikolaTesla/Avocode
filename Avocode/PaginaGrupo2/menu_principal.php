<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_admin.css">
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_empleado.css">
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal_cliente.css">
    <link rel="stylesheet" type="text/css" href="assets/style_menu_principal.css">
</head>

<body>

    <?php require_once("controlador/MenuPrincipal_VerificacionPermisos.php"); ?>
    <?php require_once("vista/mensaje_perfil.php"); ?>
    <?php require_once("controlador/Controlador_PerfilUsuario.php"); ?>

</body>

</html>