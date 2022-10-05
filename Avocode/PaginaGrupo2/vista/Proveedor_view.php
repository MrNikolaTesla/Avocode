<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles2.css">

    <title>Index no tan loco</title>

</head>

<body>
            <table class="tablas-usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre y Apellido</th>
                        <th>Empresa</th>
                        <th>Productos</th>
                        <th>Telefono</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    <tr>
                </thead>
    </div>
    <tbody>
    <h3 class="text-center">Tabla de Proveedores</h3>
        <?php foreach ($matrizProveedor as $proveedor) : ?>
            <tr>
                <td><?php echo $proveedor['id_proveedor'] ?></td>
                <td><?php echo $proveedor['nombre_apellido'] ?></td>
                <td><?php echo $proveedor['empresa'] ?></td>
                <td><?php echo $proveedor['productos'] ?></td>
                <td><?php echo $proveedor['telefono'] ?></td>
                <td><a href="../controlador/eliminar_Proveedor_controlador.php?id=<?php echo $proveedor['id_proveedor'] ?>" class="btn btn-danger"> Eliminar</a></td>
                <td><a href="ModificarProveedor_pagina.php?id=<?php echo $proveedor['id_proveedor'] ?>" class="btn btn-secondary">Modificar</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>

</html>