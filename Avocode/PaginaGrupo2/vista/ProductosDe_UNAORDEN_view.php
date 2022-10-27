 <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE Y DISPOSICIÓN EN LA PÁGINA -->
                            <!------------------------------------------------------------------------------->

                        <!-- COMIENZO DEL FORMULARIO DE PROVEEDORES -->
                        <h3 class="centrado">Productos dentro de esta Orden :</h3>
                        <form method="POST">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID del Producto</th>
                                        <th>Nombre del Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Precio Total</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                        </form>

                        <!-- CUERPO DE TABLA -->
                        <tbody>
                        <?php $precio_total = 0; foreach ($resultado as $detalle) : ?>
                                <tr>
                                    <td><?php echo $detalle['id_producto'] ?></td>
                                    <td><?php echo $detalle['nombre'] ?></td>
                                    <td><?php echo $detalle['cantidad'] ?></td>
                                    <td><?php echo $detalle['precio_linea'] ?></td>
                                    <td><?php $precio_total = $precio_total + $detalle['total_linea'];
                                    echo $detalle['total_linea'] ?></td>
                                    <td>
                                        <a href="controlador/eliminar_LineaOrden.php?id=<?php echo $detalle['identificador_detalle'] ?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                        </table>
                        <div class="centrado"><b>Total : $<?php echo $precio_total; ?></b></div>
                        <div class="centrado"><a class="button-2" href="PAGINA_GestionOrdenes.php" style="color:white;">Regresar</a></div>