<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles2.css">

    <title>Index no tan loco</title>

</head>

<body>
    <table id="customers">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Tipo de Usuario</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
        </thead>



        <tbody>
        <h3 class="text-center">Listado de Usuarios</h3>

            <?php foreach ($matrizUsuario as $usuario) : ?>
                <tr>
                    <td><?php echo $usuario['id_usuario'] ?></td>
                    <td><?php echo $usuario['nombre'] ?></td>
                    <td><?php echo $usuario['apellido'] ?></td>
                    <td><?php echo $usuario['tipo'] ?></td>
                    <td><?php echo $usuario['correo'] ?></td>
                    <td><?php echo $usuario['telefono'] ?></td>
                    <td><?php echo $usuario['direccion'] ?></td>
                    <td><a href="controlador/eliminar_Usuario_controlador.php?id=<?php echo $usuario['id_usuario'] ?>" class="btn btn-danger"> Eliminar</a></td>
                    <td><a href="ModificarUsuario_pagina.php?id=<?php echo $usuario['id_usuario'] ?>" class="btn btn-secondary">Modificar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>