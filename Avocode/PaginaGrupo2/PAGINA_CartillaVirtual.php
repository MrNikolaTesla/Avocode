<br><a href="index.php">Regresar</a><br>
<?php require_once("controlador/BtnVerMiOrden_Controlador.php"); ?>
<link rel="stylesheet" href="assets/styles2.css">

<?php require_once("controlador/ControladorMostrarCartilla.php"); ?>
<a name="orden">
<?php require_once("controlador/Controlador_Listar_Productos_En_Orden.php"); ?>
</a>

<!--Llamar al controlador para traer la cartilla-->

<!--Boton para empezar a crear una orden (view)-->

<!--Llamar al controlador para mostrar los productos dentro de tu orden siempre que su estado sea "Generandose..." y haya una orden, caso contrario que no haga NADA-->

<!--Puedo verificar si cambias el id y regresarte a esta pagina por pvto-->