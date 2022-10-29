 <!-- DIV'S CON CLASES DIFERENTES PARA EL RESPONSIVE Y DISPOSICIÓN EN LA PÁGINA -->
 <!------------------------------------------------------------------------------->

 <!-- COMIENZO DEL FORMULARIO DE PROVEEDORES -->
 <h3 class="centrado">Tu Orden :</h3>
 <form method="POST">
     <table class="table table-bordered">
         <thead>
             <tr>
                 <th>Nombre</th>
                 <th>Cantidad</th>
                 <th>Precio Unitario</th>
                 <th>Precio Total</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
 </form>

 <!-- CUERPO DE TABLA -->
 <tbody>
     <?php $precio_total = 0;
        foreach ($matrizProdOrden as $detalle) : ?>
         <tr>
             <td><?php echo $detalle['nombre'] ?></td>
             <td><?php echo $detalle['cantidad'] ?></td>
             <td><?php echo $detalle['precio_linea'] ?></td>
             <td><?php $precio_total = $precio_total + $detalle['total_linea'];
                    echo $detalle['total_linea'] ?></td>
             <td>
                 <a href="controlador/eliminar_LineaOrden.php?id=<?php echo $detalle['identificador_detalle'] ?>" title="Eliminar"><img src="assets/iconos/icono-papelera.svg"></a>
             </td>
         </tr>
     <?php endforeach; ?>
 </tbody>
 </table>
 <div class="centrado"><b>Total : $<?php echo $precio_total; ?></b></div>
 <div class="centrado"><a class="button-2" href="PAGINA_ContinuarOrden.php" style="color:white;">Continuar</a></div>
 <div class="centrado"><a class="button-3" href="controlador/Controlador_CancelarOrden.php" style="color:white;">Cancelar Orden</a></div>