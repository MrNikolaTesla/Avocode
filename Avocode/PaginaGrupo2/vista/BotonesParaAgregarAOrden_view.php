    <!--Cantidad del mismo producto-->
    <input class="input-cartilla" type="number" width="10" name="cantidad_producto"></input>
    <!--Este boton permitiria agregar un producto a la orden, probablemente vaya a tener un href que se lleve la id del producto, que incluso sin estar mostrada la tenemos detras-->
    <a href="controlador/Controlador_Agregar_A_Orden.php?id=<?php echo $producto['id_producto'] ?>" name="agregar_a_orden" type="submit"><button>IDK!</button></a>