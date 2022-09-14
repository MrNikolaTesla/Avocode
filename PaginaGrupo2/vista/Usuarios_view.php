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
    <?php
    foreach ($matrizUsuario as $registro) {
        //echo $registro['matricula'] . " - " . $registro['nombre']. " <br> " ;
    }
    ?>
    <!-- No se cual es esta class porque es del boostrap -->
    <!-- INICIO FORMULARIO ALTA -->

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
                <th>Contraseña</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
        </thead>

        </div>
        </form>

        <h3 class="text-center">Modificacion de Usuarios</h3>
        <tbody>
            <?php foreach ($matrizUsuario as $usuario) : ?>
                <tr>
                    <td><?php echo $usuario['id_usuario'] ?></td>
                    <td><?php echo $usuario['nombre'] ?></td>
                    <td><?php echo $usuario['apellido'] ?></td>
                    <td><?php echo $usuario['tipo'] ?></td>
                    <td><?php echo $usuario['correo'] ?></td>
                    <td><?php echo $usuario['telefono'] ?></td>
                    <td><?php echo $usuario['direccion'] ?></td>
                    <td><?php echo $usuario['password'] ?></td>
                    <td><a href="../controlador/eliminar_Usuario_controlador.php?id=<?php echo $usuario['id_usuario'] ?>" class="btn btn-danger"> Eliminar</a></td>
                    <td><a href="ModificarUsuario_pagina.php?id=<?php echo $usuario['id_usuario'] ?>" class="btn btn-secondary">Modificar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>