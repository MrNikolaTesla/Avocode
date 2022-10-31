<form method="POST">
     <?php require_once("controlador/Controlador_Agregar_A_Orden.php"); ?>
     <input type="number" min="1" name="cantidad_producto"></input>
     <input type="text" name="id_producto" value="<?php echo $producto['id_producto'] ?>" hidden></input>
     <button class="button-2" type="submit" name="agregar_a_orden" value="Agregar">+</button>
 </form>