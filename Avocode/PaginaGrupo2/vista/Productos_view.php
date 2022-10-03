<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=devide-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/styles2.css">

</head>
<body>
<?php
?>
<h3 class="text-center">Tabla de Productos</h3>
<table class="table">
<thead>
    <tr>
        <th scope="col">ID</th> 
        <th scope="col">Nombre</th> 
        <th scope="col">Precio</th> 
        <th scope="col">Tipo de Producto</th> 
        <th scope="col">Eliminar</th>
        <th scope="col">Modificar</th>
    <tr>
</thead>
    <tbody>
<?php foreach($producto_modificar as $producto): ?>
    <tr>
        <th scope="row"><?php echo $producto['id_articulo']?></th>
        <td><?php echo $producto['nombre']?></td>
        <td><?php echo $producto['precio']?></td>
        <td><?php echo $producto['tipo']?></td>
        <td><a href="../controlador/eliminar_Producto_controlador.php?id=<?php echo $producto['id_articulo']?>" class="btn btn-danger"> Eliminar</a></td>
        <td><a href="ModificarProducto_pagina.php?id=<?php echo $producto['id_articulo']?>" class="btn btn-secondary">Modificar</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>

</html>