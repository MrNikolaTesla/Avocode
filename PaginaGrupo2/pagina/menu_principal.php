<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_admin.css">
    <link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_empleado.css">
    <link rel="stylesheet" type="text/css" href="../assets/style_menu_principal_cliente.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
.body-admin{
	background-image: url("../assets/fondoinicio.png");
	background-size: cover;
	background-position: center;
  }
ul{
	list-style: none;
	margin-top: 1.6vh;
	width: 292px;
}
li{
	padding: 10px;
  margin-left: 25px;
	text-align: center;
}
hr{
	margin-left: -13%;
	margin-right: -13%;
}
</style>

<body class="body-admin body-empleado body-cliente">
    <?php require_once("../controlador/MenuPrincipal_VerificacionPermisos.php"); ?>
</body>

</html>