 <!--Este boton permitiria agregar un producto a la orden, probablemente vaya a tener un href que se lleve la id del producto, que incluso sin estar mostrada la tenemos detras-->
 <form method="POST">
     <?php require_once("controlador/Controlador_Agregar_A_Orden.php"); ?>
     <input type="number" min="1" name="cantidad_producto"></input>
     <input type="text" name="id_producto" value="<?php echo $producto['id_producto'] ?>" hidden></input>
     <button class="button-2" type="submit" name="agregar_a_orden" value="Agregar">+</button>
 </form>
 <!--<a href="controlador/Controlador_Agregar_A_Orden.php?id=echodeid">IDK!</a>-->
 <!--Da por finalizada la orden, esto es temporal-->