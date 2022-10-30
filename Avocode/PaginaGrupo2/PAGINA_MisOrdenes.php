<title>Mis ordenes</title>
<div>
    <br>

    <?php require_once("controlador/Mostrar_Ordenes_Usuario_controlador.php"); ?>
    <a href="index.php"><button class="button-2">Regresar</button></a>

</div>
<!--Esta pagina permitiria ver el estado de tu orden-->

<!--Llamar a un controlador que se lleve la id de la sesion, y busque todas las ordenes activas o en proceso en las cuales la id del cliente sea igual a la id del usuario-->

<!--Estaria bueno recargar la pagina forzadamente una vez cada tanto-->