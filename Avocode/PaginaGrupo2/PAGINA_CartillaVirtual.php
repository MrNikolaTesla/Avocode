<title>Cartilla virtual</title>
<br>
<link rel="stylesheet" href="assets/styles2.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">
    <title>Cartilla Virtual</title>
</head>

<body>
    <?php require_once("controlador/ControladorMostrarCartilla.php"); ?>
    <a name="orden">
        <?php require_once("controlador/Controlador_Listar_Productos_En_Orden.php"); ?>
    </a>

    <!--Llamar al controlador para traer la cartilla-->

    <!--Boton para empezar a crear una orden (view)-->

    <!--Llamar al controlador para mostrar los productos dentro de tu orden siempre que su estado sea "Generandose..." y haya una orden, caso contrario que no haga NADA-->

    <!--Puedo verificar si cambias el id y regresarte a esta pagina por pvto-->
</body>

</html>